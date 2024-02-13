<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class Blogs extends Controller
{
    public function showPosts() {
        // get posts from the database
        $blogs = Blog::all();

        // output the received blogs on the site
        return view('blogs-home', ['blogs' => $blogs]);
    }
}
