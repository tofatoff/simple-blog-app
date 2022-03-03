<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
	"title"=>"",
	"slug"=>"",
	"content"=>""
	];

	public static function all(){
		return collect(self::$blog_posts); //return collection
	}

	public static function find($slug){
		$posts = static::all();
		return $posts->findWhere('slug',$slug);
	}
}
