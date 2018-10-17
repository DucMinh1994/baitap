<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
	public function index(){
    	$posts  = Post::paginate(5); // lấy tất cả bài viết bằng câu lệnh hàm all()

    	return view('index',[
    		'posts' => $posts // dữ liệu được truyền qua view bằng biến posts
    	]);
    }
}
