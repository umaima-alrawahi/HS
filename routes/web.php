<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GroupController;

use Illuminate\Http\Request;


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

Route::get('/',App\Http\Controllers\WelcomeController::class);

// Route::get('test', function (){
//     abort(401);
//     //throw new \Exception('Error Test'); 
// });

Route::get('test', function (){
    //return view('errors/500');
    abort(500);
    //throw new \Exception('Error Test'); 
});
//resource will create all routs in PostController
Route::resource('posts', \App\Http\Controllers\PostController::class);
Route::resource('groups', \App\Http\Controllers\GroupController::class)->Middleware('auth');
//Route::post('/posts/store', 'App\Http\Controllers\PostController@store')->Middleware('auth');

Route::get('/posts/create', 'App\Http\Controllers\PostController@create')->Middleware('auth');

Route::get('/posts/edit/{id}', 'App\Http\Controllers\PostController@edit')->Middleware('auth');
Route::post('/posts/update/{id}', 'App\Http\Controllers\PostController@update')->name('posts.update')->Middleware('auth');
Route::get('/posts/delete/{id}', 'App\Http\Controllers\PostController@delete')->name('posts.delete')->Middleware('auth');
Route::post('/posts/destroy/{id}', 'App\Http\Controllers\PostController@destroy')->name('posts.destroy')->Middleware('auth');
Route::get('/posts/show/{id}', 'App\Http\Controllers\PostController@show')->name('posts.show')->Middleware('auth');;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
