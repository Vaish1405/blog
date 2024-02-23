<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPost;
use App\Http\Controllers\FormInput; 
use App\Http\Controllers\Blogs; 
use App\Http\Controllers\loginRegister; 
use Illuminate\Support\Facades\DB;

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
})->name('home');

Route::get('/posts', [BlogPost::class, 'print']); // prints the form in HTML form 
// Route::get('/api/posts', [BlogPost::class, 'printJson']);

// get info from the user 
Route::get('/form', function() {
    return view('form');
});

// return the JSON version of the info
Route::post('/processForm', [FormInput::class, 'processForm'])->name('processForm');

// for the main site of the blog website
Route::get('/blogs-home', [Blogs::class, 'showPosts']);

// login page
Route::get('/login', [loginRegister::class, 'login'])->name('login');
Route::post('/login', [loginRegister::class, 'loginPost'])->name('login.post');

// Register page
Route::get('/register', [loginRegister::class, 'register'])->name('register');
Route::post('/register', [loginRegister::class, 'registerPost'])->name('register.post');

Route::get('/user-page', function(){
    return view('user-page');
})->name('user-page');

Route::post('/logout', [loginRegister::class, 'logout'])->name('logout');