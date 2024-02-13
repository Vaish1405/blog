<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPost;
use App\Http\Controllers\FormInput; 
use App\Http\Controllers\Blogs; 
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
});

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
