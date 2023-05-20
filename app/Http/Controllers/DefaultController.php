<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class DefaultController extends Controller
{
    
    public function homepage(){
    
        return view('homepage', ['blogsAllData' => Blog::all() ]);
    }

    public function blogpost(){
        return view('blogpost');
    }

    public function show(Request $request){

        $allPostData = Blog::find($request->id);

        return view('blogpost', [
            'allPost' => $allPostData
        ]);

    }
}
