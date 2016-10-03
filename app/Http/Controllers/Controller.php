<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function generate_id(){
			$characters = 'qwertyuioplkjhgfdsazxcvbnm';

        	// generate a pin based on 2 * 1 digits + a random character
        	$usr_pin = mt_rand(1, 9)
        	. mt_rand(1, 9)
        	. $characters[rand(0, strlen($characters) - 1)];
        
        	$data['user_id'] = str_shuffle($usr_pin).md5(date('Y-m-d H:i:s:u'));
        	return $data['user_id'];
		}
}
