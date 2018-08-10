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

Route::get('/', function () {


    return view('welcome');
});

/*Route::get('/about', function(){

   return "This is about us";
});

Route::get('/contact', function () {
   return "This is the contact";
});

Route::get('/post/{id}/{name}', function ($id, $name) {
   return "This is post number ".$id . " " . $name;
});

Route::get('admin/post/example', array('as' =>'admin.post', function(){
    $url = route('admin.post');
    return "this url is" . $url;
}));*/

//Route::get('post/{id}', 'PostsController@index');

Route::resource('posts', 'PostsController');

Route::get('/contact', 'PostsController@contact');












Route::group(['middleware' => ['web']], function () {

});