<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'first_name', 'last_name','email', 'password', 'date', 'id', 'user_id', 'verification_code', 'post_id',
       'post_title', 'text_description', 'catagory', 'privacy', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public static $login_validation_rules = [
      'email' => 'required|email|exists:users',
      'password' => 'required',
    ];

    public static $create_validation_rules = [
      'first_name' => 'required',
      'last_name' => 'required',
      'email' => 'required|email|unique:users',
      'password' => 'required',
      'date' => 'required',
    ];

     public static $create_validation_upload_text = [
      'post_title' => 'required',
      'text_description' => 'required',
      'catagory' => 'required',
    ];
}
