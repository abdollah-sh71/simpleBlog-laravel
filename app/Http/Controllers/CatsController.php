<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cat;

class CatsController extends Controller
{
    public function read()
    {
    	$data['cats'] = Cat::all();
    	return view('admin.cat.read', $data);
    }

    public function create(Request $request)
    {
    	if ($request->isMethod('post')) {
    		$this->validate($request, ['name' => 'required']);
    	    $new_cat = new Cat;
    		$new_cat->name = $request->input('name');
    		$new_cat->save();		
    	}
    }
}
