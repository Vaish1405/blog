<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPost;

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

Route::get('/posts', [BlogPost::class, 'print']);
Route::get('/api/posts', [BlogPost::class, 'printJson']);