<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('user',function(){
	$user = App\User::find(1);

	dd($user->phone->phone);
});
Route::get('post',function(){
	$user = App\User::find(1);
	dd($user->posts);
	
});
Route::get('menu',function(){
		$user = App\User::find(1);

		dd($user->products);
});
Route::get('/', 'HomeController@index');

Route::get('index',function(){

	$posts = App\Post::all();
	return view('blogs.index',[
		'posts' => $posts
	]);
});

Route::get('post',function(){
	$posts = App\Post::all();
	return view('blogs.post',[
		'posts' => $posts
	]);
	
});
Route::get('cate',function(){
	return view('cate');
});
Route::get('index/{id}','PostController@show');
