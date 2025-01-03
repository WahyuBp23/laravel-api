<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'author', 'image', 'page', 'content', 'status'];


    public function comments () {
        return $this -> hasmany (Comment::class);
    }

}
