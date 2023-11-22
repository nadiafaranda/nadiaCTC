<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [UserController::class, 'welcome']);
Route::post('/checklogin', [UserController::class, 'checklogin']);

//create new record
Route::get('/user/create',[UserController::class,'create']);
//get all users
Route::get('/users',[UserController::class,'getAll']);
//store all users
Route::POST('/new-member',[UserController::class,'store']);
//get spesific user by ID
Route::get('/user/{id}',[UserController::class,'find']);
//edit spesific user by ID
Route::get('{id}/edit',[UserController::class,'edit']);
//update spesific user by ID
Route::POST('{id}/update', [UserController::class, 'update']);
//delete spesific user by ID
Route::delete('{id}/delete',[UserController::class,'destroy']);
Route::get('logout',[UserController::class,'logout']);
// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/home', [UserController::class, 'index']);
Route::get('about', function () {
    return view('about');
});
Route::get('contact', function (){
    return view('contact');
});
Route::get('newmember', function (){
    return view('newmember');
});


