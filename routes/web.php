<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EmailController;

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
Route::get('country', function () {
    return view('country');
})->middleware('country'); // this country from kernal.php 

Route::get('/usingGet',[PostController::class,'index']);  //using get method
Route::get('/edit', [PostController::class, 'edit'])->name('edit');

Route::resource('post', PostController::class);     // using resource method post operation

Route::get('dashboard', function () {
    return view('backend.dashboard');
});

Route::get('email',[EmailController::class,'index'])->name('email');
Route::post('email/send', [EmailController::class, 'send'])->name('email.send');

Route::get('/test',function(Request $request){
  //  $request->session()->put('age','24');
  session()->put('age', '34');
    // session(['name'=>'Learnhunter']);  //This is session which helps to store data temporarily in the server
});
Route::get('/test/all',function(Request $request){
    //  $request->session()->put('age','24');
    session()->flush(); // this will help to delete session
  // return session()->all();
      // session(['name'=>'Learnhunter']);  //This is session which helps to store data temporarily in the server
  });
