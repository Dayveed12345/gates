<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function index(){
        $post=post::with('user')->get();
        return view('policy.index',['post'=>$post]);
    }
    public function show(Post $post)
    {
        $this->authorize('can:view');
        return view('policy.show')->with('post',$post);
    }
}
