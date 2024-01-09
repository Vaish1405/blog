<?php

namespace App\Http\Controllers; 
use Illuminate\Http\Request;

class formInput extends Controller {
    public function processForm(Request $request)
    {
        $data = $request->only(['id', 'title', 'summary', 'imageUrl', 'author', 'creationDate', 'updateDate', 'tags', 'commentsCount']);
        
        $jsonData = json_encode($data);

        return response()->json($jsonData);
    }
}