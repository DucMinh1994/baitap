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
// Route::get('/', 'HomeController@index');

Route::get('index',function(){

	$posts = App\Post::paginate(5);
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
// Route::get('index/{id}','PostController@show');
Route::get('search','PostController@search');
Route::get('post/{slug}','PostController@show');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
	Auth::routes(['verify' => true , 'register' => true]);
	Route::middleware(['auth','verified'])->group(function(){
		Route::get('/home', 'HomeController@index')->name('home');

		Route::get('test',function(){
			return 'test';
		});
	});
	
});
Route::get("/",function(){
	return view('welcome1');
	});
// Route::post('/upload',function(Request $request){
// 	//store(images) thu muc chua anh
// 	//lua 1 anh
	
// // $path = request()->images->store('images');
// 	//luu nhieu anh
// 	$images = request()->images;
// 	foreach ($images as $key => $image) {
// 		$path = $image->store('images');
// 		// roi goi save() là lưu vào trong database
// 		// $Post = new Post
// 		//vd: Post->thumbnal = $path 
// 		//Post->save()
// 	}
// 	dd($path);
// });
Route::post('/upload',function(Request $request){
	 dd(request()->all());
	
});