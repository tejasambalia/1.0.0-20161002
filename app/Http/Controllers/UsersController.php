<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
//use App\Http\Controllers\Mail;
use Mail;
use DB;
use Storage;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test(Request $request){
        //$text = '127.0.0.1  '.$id.'.myapp.local'
        //Storage::append('/etc/hosts', $text);
        $data = $request->only('photo_description');
        return view('test')->with('description', $data);
    }

    public function test_main(){
        //$text = '127.0.0.1  '.$id.'.myapp.local'
        //Storage::append('/etc/hosts', $text);
        return view('test_main');
    }



    public function create()
    {
        return view('signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {                
        $this->validate($request, User::$create_validation_rules);
        $data = $request->only('user_id','first_name', 'last_name', 'email', 'password', 'date', 'verification_code');
        //generate user_id     
        $usr_string = str_random(3);
        $characters = 'qwertyuioplkjhgfdsazxcvbnm';

        // generate a pin based on 2 * 1 digits + a random character
        $usr_pin = mt_rand(1, 9)
        . mt_rand(1, 9)
        . $characters[rand(0, strlen($characters) - 1)];
        
        $data['user_id'] = str_shuffle($usr_pin).md5(date('Y-m-d H:i:s:u'));

        //generating verification_code
        $string = str_random(15);
        //generate pin
        $pin = mt_rand(10000, 99999)
        . mt_rand(10000, 99999)
        . $characters[rand(0, strlen($characters) - 1)]
        . $characters[rand(0, strlen($characters) - 1)]
        . $characters[rand(0, strlen($characters) - 1)]
        . $characters[rand(0, strlen($characters) - 1)]
        . $characters[rand(0, strlen($characters) - 1)];

        $data['verification_code'] = str_shuffle($pin);


        $data['password'] = bcrypt($data['password']);        
        $user = User::create($data);
         
        if($user){
            //send verification email
            $mail_data = array(
                'verify' => "verify",
                'user_id' => $data['user_id'],
                'verification_code' => $data['verification_code'],
                'email' => $data['email']
            );            

            Mail::send('emailverify', $mail_data, function ($message) use ($data) {

            $message->from('tejas.ambalia1994@gmail.com', 'Creative Bucket');

            $message->to($data['email'])->subject('Verify Creative Bucket Account');

    });


          return redirect()->route('login');
        }

        return back();
    }

    //verify email
    public function verify($userid, $verifyid){
        //get verification code from database
        $verification_code = DB::table('users')
        ->where('user_id', $userid)
        ->value('verification_code');
        //Check verified value 0 to 1 in database
        if($verification_code==$verifyid){
            //Change verified value 0 to 1 in database
            DB::table('users')
            ->where('user_id', $userid)
            ->update(['verified' => 1]);
            //create user diractory
            Storage::makeDirectory('/users_data/'.$userid);
            Storage::makeDirectory('/public/users_data/'.$userid);
            //File::makeDirectory(, 0775, true);
            //File::makeDirectory('../../public/users_data/'.$user_id, 0775, true);
            //redirect to the login page
            return redirect()->route('login');
        }

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function index()
    {
        return view('index');
    }

    public function photo()
    {
        return view('photo');
    }

    public function text()
    {
        return view('text');
    }

     public function calendar()
    {
      return view('calendar');
    }

     public function chart()
    {
        return view('chart');
    }

     public function filemanager()
    {
      return view('file-manager');
    }

     public function form()
    {
      return view('form');
    }

     public function gallery()
    {
      return view('gallery');
    }

     public function icon()
    {
      return view('icon');
    }

     public function messages()
    {
      return view('messages');
    }

     public function addusers()
    {
      return view('addusers');
    }

    public function editusers()
    {
      return view('editusers');
    }

    public function deleteusers()
    {
      return view('deleteusers');
    }

    public function view()
    {
      return view('view');
    }

    public function add()
    {
      return view('add');
    }

    public function delete()
    {
      return view('delete');
    }

    public function table()
    {
      return view('table');
    }

    public function tasks()
    {        
      return view('tasks');
    }

    public function typography()
    {
      return view('typography');
    }

    public function ui()
    {
      return view('ui');
    }
     public function projects()
    {
            return view('projects');
    }

    public function widgets()
    {
      return view('widgets');
    }
    public function onlineuser()
    {
      return view('online-user');
    }
}
