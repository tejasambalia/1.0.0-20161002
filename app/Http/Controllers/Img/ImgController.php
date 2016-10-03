<?php

namespace App\Http\Controllers\Img;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
	protected function displayImg($userid, $imgid)
    {
    	$data['userid'] = $userid;
    	$data['imgid'] = $imgid;
    	return View::make('open', $data);
    }
}