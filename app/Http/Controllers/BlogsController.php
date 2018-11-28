<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Post;
use App\Cat;

class BlogsController extends Controller
{
    public function home()
    {
    	$data['cats'] = Cat::all();
    	$data['posts'] = Post::paginate(3);
    	return view('blog.home', $data);
    }

    public function searchByCategory($cat_id)
    {
    	$data['posts'] = DB::select('SELECT * FROM `posts` JOIN `cat_post` ON `posts`.`id` = `cat_post`.`post_id` WHERE `cat_post`.`cat_id` = '.$cat_id );
    	$data['cats'] = Cat::all();
    	// $all_post = DB::table('posts')->
    	            // join('cat_posts', 'posts.id', '=', 'cat_posts.post_id')->
    	            // where('cat_posts.cat_id', '=', $cat_id);
    	// $data['posts']
    	// echo "<pre>";
    	// print_r($all_post);
    	return view('blog.searchByCategory', $data);
    }
}
