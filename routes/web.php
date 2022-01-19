<?php

use Illuminate\Support\Facades\Route;

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
    return view('errors/500');
    //abort(401);
    //throw new \Exception('Error Test'); 
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
