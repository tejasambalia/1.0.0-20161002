<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Response;
use DB;
use Storage;
use XMLWriter;
use Redirect;
use Illuminate\Support\Facades\Input;

class ImgController extends Controller
{
    
	protected function displayImg($userid, $imgid)
    {
    	$data['userid'] = $userid;
    	$data['imgid'] = $imgid;
    	//$query = "SELECT first_name FROM users WHERE id='1'";
        $result = DB::table('users')->get();
        $xml = new XMLWriter();
        $xml->openMemory();
        $xml->startDocument();
        $xml->startElement('users');
        foreach($result as $user) {
            $xml->startElement('data');
            $xml->writeAttribute('id', $user->id);
            $xml->writeAttribute('firstname', $user->first_name);
            $xml->writeAttribute('lastname', $user->last_name);
            $xml->writeAttribute('email', $user->email);
            $xml->endElement();
        }
        $xml->endElement();
        $xml->endDocument();

        $content = $xml->outputMemory();
        $xml = null;
        Storage::disk('local')->put('file.jpg', $content);
        return view('open')->with('data', $data);
    	//return View::make('open', $data);
        
    }

    protected function uploadImg()
    {
    	return view('upload');
    	//return View::make('open', $data);
    }

    protected function uploadText()
    {
        return view('write');
        //return View::make('open', $data);
    }

    protected function handleText(Request $request)
    {
        $this->validate($request, User::$create_validation_upload_text);
        $data = $request->only('user_id','post_title','text_description', 'catagory', 'privacy');
        //generate post_id
        if($data['privacy'] == null)
        {
            $data['privacy']=0;
        }
        $characters = 'qwertyuioplkjhgfdsazxcvbnm';

        // generate a pin based on 2 * 1 digits + a random character
        $usr_pin = mt_rand(1, 9)
        . mt_rand(1, 9)
        . $characters[rand(0, strlen($characters) - 1)];
        
        $data['post_id'] = str_shuffle($usr_pin).md5(date('Y-m-d H:i:s:u'));
        //store post description file into file system
        Storage::disk('local')->put($data['post_id'].'.txt', $data['text_description']);

        DB::table('post_text')->insert([
            'post_id' => $data['post_id'],
            'user_id' => $data['user_id'],
            'post_title' => $data['post_title'],
            'post_description_file_path' => '../storage/app/'.$data['post_id'],
            'category' => $data['catagory'],
            'privacy' => $data['privacy']
            ]);

        return 'done';


    }

    protected function handleUpload(Request $request)
    {
         $file = array('image' => Input::file('image'));
         $rules = array('image' => 'required|mimes:jpeg,bmp,png',);
         $validator = Validator::make($file, $rules);
         if ($validator->fails()) {
             // send back to the page with the input data with errors
             return 'Image not valid';
         }
         else {
        //     // checking file is valid.
         //    if (Input::file('image')->isValid()) {
               $destinationPath = '../storage/app/public/users_data'; // upload path
               $destination_img_path = '../storage/app/public/users_data/compress'; // compress store path
               $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
               $fileName = rand(11111,99999).'.'.$extension; // renameing image
               Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
               $source_img = $destinationPath."/".$fileName; //get image path to compress

               $destination_img = $destination_img_path."/".$fileName;

               $info = getimagesize($source_img);

                if ($info['mime'] == 'image/jpeg') 
                    $image = imagecreatefromjpeg($source_img);

                elseif ($info['mime'] == 'image/gif') 
                    $image = imagecreatefromgif($source_img);

                elseif ($info['mime'] == 'image/png') 
                    $image = imagecreatefrompng($source_img);

                imagejpeg($image, $destination_img, 50);
        //       // sending back with message
               return 'upload success...';
        //     }
        //     else {
        //       // sending back with error message.
        //       return 'Image not uploaded..!!';
             }
    }

}