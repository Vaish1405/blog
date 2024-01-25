<?php

namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use App\Models\Post;

class FormInput extends Controller {
    public function processForm(Request $request)
    {
        // $data = $request->only(['id', 'title', 'summary', 'imageUrl', 'author', 'creationDate', 'updateDate', 'tags', 'commentsCount']);
        
        $validatedData = $request->validate([
            'bookid' => 'required',
            'title' => 'required',
            'author' => 'required',
            'commentsCount' => 'required'
        ], [
            'bookid.required' => 'Id is required',
            'title.required' => 'Title is required',
            'author.required' => 'Auther name is required',
            'commentsCount.required' => 'Provide the number of comments'
        ]);
        
        $data = $request->only('bookid', 'title', 'summary', 'author', 'creationDate', 'updateDate', 'commentsCount');
        $tags = json_encode($request->only('tags'));
        $jsonData = json_encode($data);


        $post = Post::create([
            'bookid' => $data['bookid'],
            'title' => $data['title'],
            'summary' => $data['summary'],
            'author' => $data['author'],
            'creationDate' => $data['creationDate'],
            'updateDate' => $data['updateDate'],
            'tags' => $tags, 
            'commentsCount' => $data['commentsCount']
        ]);
        return response()->json($jsonData);


        // return response()->json($jsonData);
    }
}