<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function logout (Auth $Auth) {
        // logout user
        auth()->logout();
        // redirect to homepage
        return view('posts/welcome');
    }
    public function create() {
        return view('posts/create');
    }
    public function index() {
        return view('index');
    }
        public function gallery() {
        return view('gallery');
    }
    
    public function store(Request $request){
        $post=new Post;
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->save();
        $msg_success='Successfully added new post!';
        return redirect('posts/viewallposts')->with('status', $msg_success);
        
    }
    

}
