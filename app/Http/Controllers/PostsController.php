<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Cat;

class PostsController extends Controller
{
    public function create(Request $request)
    {
    	$data['cats'] = Cat::all();
    	if ($request->isMethod('post')) {
    		$cat_value = [];
    		$this->validate(
    			$request,
    			[
    				'title' => 'required',
    				'content' => 'required',
    				'cat' => 'required',
    			]
    		);

    		$new_post = new Post;
    		$new_post->title = $request->input('title');
    		$new_post->content = $request->input('content');
    		$new_post->save();

    		$new_post->cats()->attach( $request->input('cat') );
    		
    	}
    	return view('admin.post.create', $data);
    }

    public function read()
    {
    	$data['posts'] = Post::all();
    	return view('admin.post.read', $data);
    }

    public function update(Request $request, $post_id)
    {
    	$post_info = Post::find($post_id);
    	foreach ($post_info->cats as $key => $value) {
    	$check[$key] = $value->name;
    	}
    	$data['cats'] = Cat::all();    	
    	$data['post_cats'] = $check;//post_info->post_info
    	$data['id'] = $post_info->id;
    	$data['title'] = $post_info->title;
    	$data['content'] = $post_info->content;
    	if ($request->isMethod('put')) {
    		$cat_value = [];
    		$this->validate(
    			$request,
    			[
    				'title' => 'required',
    				'content' => 'required',
    				'cat' => 'required',
    			]
    		);

    		$new_post = Post::find($post_id);
    		$new_post->title = $request->input('title');
    		$new_post->content = $request->input('content');
    		$new_post->save();

    		$new_post->cats()->sync( $request->input('cat') );
    		return redirect('admin/post/read');
    		
    	}
    	return view('admin.post.update', $data);
    }

    public function delete($post_id)
    {
    	$post = Post::find($post_id);
    	// $post->destroy(1);
    	$post->cats()->detach();
    	$post->delete();
    	return redirect('admin/post/read');
    }

    public function test()
    {
    	$posts = Post::find(5);
    	echo "<pre>";
    	foreach ($posts->cats as $key => $value) {
    		echo $key.$value->name."<br>";
    	}
    	// print_r( $posts->cats );
    }
}
