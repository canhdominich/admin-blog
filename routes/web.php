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

// category
Route::resource('admin/category', 'CategoryController');
Route::get('/new/category', function(){
	return view('category.new_category');
});

// tag
Route::resource('admin/tag', 'TagController');
Route::get('/new/tag', function(){
	return view('tag.new_tag');
});

//post
Route::resource('admin/post', 'PostController');
Route::get('/new/post', function(){
	return view('post.new_post');
});


// Route::get('/', function () {
// 	// $mobile = \App\User::find(2)->phone->mobile;

// 	// dd($mobile);

// 	$user = \App\Phone::find(2)->user->name;
// 	dd($user);

// 	return view('welcome');


// });

// Route::get('/', function () {
// 	// $mobile = \App\User::find(2)->phone->mobile;

// 	// dd($mobile);

// 	$post = \App\Post::find(1)->comments;
// 	dd($post);

// 	return view('welcome');


// });

// Route::get('/', function () {
// 	// $mobile = \App\User::find(2)->phone->mobile;

// 	// dd($mobile);

// 	$post = \App\Comment::find(1)->post;
// 	dd($post);

// 	return view('welcome');


// });

// Route::get('/', function () {
// 	// $mobile = \App\User::find(2)->phone->mobile;

// 	// dd($mobile);

// 	$user = \App\Post::find(1)->users;
// 	dd($user);

// 	return view('welcome');


// });

// Route::get('/', function () {
// 	// $mobile = \App\User::find(2)->phone->mobile;

// 	// dd($mobile);

// 	$user = \App\User::with('posts')->find(1);
// 	dd($user);

// 	return view('welcome');


// });

// Route::get('/', function () {
// 	return view('layouts.master');
// });

// Route::get('greeting', function(){
// 	return view('layouts.master',['name' => 'Zent Group']);
// });

// Route::get('/', 'BlogController@index');


// // Auth::routes();

// // Route::get('/home', 'HomeController@index')->name('home');

// Route::prefix('admin')->group(function(){

// 	Auth::routes();

// 	Route::get('/home', 'HomeController@index')->name('home');

// });
// 
// Route::get('/', 'BlogController@index');

// // Route::get('/category/{slug}', 'BlogController@category');

// // Route::get('/{slug}', 'BlogController@detail');

// Route::get('/admin/manager', 'BlogController@admin');

// Route::get('manager/blog', function(){
// 	return view('manager_blog');
// });

// Route::get('/addpost', function(){
// 	return view('post.add_post');
// });



