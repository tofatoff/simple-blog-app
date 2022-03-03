<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
		//return di bawah ini copas dari web.php dan yg di web.phpnya apus aja
		return view('posts',[
			"title" => "Posts",
			"posts" => Post::all()
		]);
	}

	public function show(Post $post){
		return view('post',[
			"title" => "Single Posts",
			"post" => $post
		]);
	}
}
