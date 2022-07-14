<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

// Route::get('id/{name}', function ($name) {
//     return view('welcome',['name'=> $name]);
// });
// Route:: view('addtodo','/addtodo');
// Route:: get('user',[UserController::class,'show']);
// Route:: get('user/{id}',[UserController::class,'showid']);
// Route:: get('addtodo/{name}',[UserController::class,'showviwe']);
// Route:: post('addtodo',[UserController::class,'addtodo']);
// Route:: post('/list',[UserController::class,'show']);
Route:: get('/',[UserController::class,'show']);
Route:: post('/',[UserController::class,'addtodo']);
Route:: get('/delete/{id}',[UserController::class,'tododelete']);
Route:: get('/edit/{id}',[UserController::class,'editpage']);
Route:: post('/todoedit',[UserController::class,'todoedit']);

