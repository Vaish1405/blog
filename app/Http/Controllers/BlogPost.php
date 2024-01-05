<?php

namespace App\Http\Controllers;


class BlogPost extends Controller
{
    public function print() {
        
        $blogs = file_get_contents('/Users/vaishnavisen/Herd/blog/storage/blogs.json');
        $blogsList = json_decode($blogs, true);

        return view('blog', ['posts' => $blogsList['blogPosts']]);
    }
}