<?php

namespace App\Http\Controllers; 
use Illuminate\Http\Request;

class FormInput extends Controller {
    public function processForm(Request $request)
    {
        // $data = $request->only(['id', 'title', 'summary', 'imageUrl', 'author', 'creationDate', 'updateDate', 'tags', 'commentsCount']);
        
        $validatedData = $request->validate([
            'id' => 'required',
            'title' => 'required',
            'author' => 'required',
            'commentsCount' => 'required'
        ], [
            'id.required' => 'Id is required',
            'title.required' => 'Title is required',
            'author.required' => 'Auther name is required',
            'commentsCount.required' => 'Provide the number of comments'
        ]);
        
        $data = $validatedData->only(['id', 'title', 'summary', 'imageUrl', 'author', 'creationDate', 'updateDate', 'tags', 'commentsCount']);
        $jsonData = json_encode($data);

        return response()->json($jsonData);
    }
}