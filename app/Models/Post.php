<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false; 
    protected $fillable = ['bookid', 'title', 'summary', 'author', 'creationDate', 'updateDate', 'tags', 'commentsCount'];
}
