<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    // public function show($id){
    // 	$post = Post::find($id);
    // 	  return view('blogs.detail', ['post' => $post]);
    // }

    public function search(Request $request){
        $tk = $_GET['q'];

    	$q = $request->q;
    	$posts = Post::where('title','like','%'.$q.'%')->orwhere('content','like','%'.$q.'%')->orwhere('content','like','%'.$tk.'%')->paginate(5);
        dd($posts);
    	return view('blogs.index',['posts' => $posts,'q' => $q]);
    }

    public function show($slug){
    	$post = Post::where('slug',$slug)->first();
        $post->increment('view_count');
    	return view('blogs.detail',compact('post'));
    	//bo vietkey str_slug($title)
    }
}
