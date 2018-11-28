<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Cat;

class BlogsController extends Controller
{
    public function home()
    {
    	$data['posts'] = Post::paginate(3);
    	return view('blog.home', $data);
    }
}
