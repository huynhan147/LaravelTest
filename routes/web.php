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
use App\Tasks;



//Route::get('/tasks','TasksController@index');
//Route::get('/tasks/{task}','TasksController@show');


Route::get('/province/{id}',function($id){
    $test = App\Models\Praovince::find($id);
    dd($test->name);
});


Route::get('about',function(){
    return view('about');
});
Route::get('my-cv','MycvController@index');




Route::get('/','PostsController@index');
Route::get('/posts/{post}','PostsController@show');

Route::post('/posts','PostsController@store');
//Route::get('/admins',function(){
//
//});
Route::post('/posts/{id}/comments','CommentsController@store');
Route::get('/posts/tags/{tag}','TagsController@index');
Route::group(['prefix'=>'/admins','middleware'=>'auth'],function(){
    Route::get('/province','ProvinceController@index');
    Route::get('/province/{id}','ProvinceController@show');
    Route::get('/province-add','ProvinceController@add');
    Route::post('/province','ProvinceController@store');
    Route::get('/post/create','PostsController@create');
    Route::get('/','AdminController@index');
    Route::get('/post-delete/{id}','AdminController@destroy');
    Route::get('/addtag','AdminController@addtag');
    Route::post('/addtag','AdminController@storetag');
    Route::get('/settag','AdminController@settag');
    Route::post('/settag','AdminController@storesettag');
});

//Auth::routes();

Route::get('/home', 'PostsController@index')->name('home');
Route::get('/login','SessionController@create')->name('login');
Route::post('/login','SessionController@store');
Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');
Route::get('/logout','SessionController@destroy');


