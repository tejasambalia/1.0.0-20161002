<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class commentController extends Controller
{
	public function addComment(Request $request)
	{
		$comment_id = Controller::generate_id();
		$comment_description = $request->only('comment_description', 'post_id');
		//$post_id = $request->only();
		$user_id = \Auth::user()->user_id;
		
		return $comment_id."	".$comment_description['comment_description']." 	".$comment_description['post_id']."		".$user_id;
	}
}