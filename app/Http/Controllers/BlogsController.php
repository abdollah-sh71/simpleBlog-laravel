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
    	return view('blog.home');
    }
}
