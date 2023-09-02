<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'blog_category_id',
        'title',
        'tags',
        'thumbnail',
        'content',
    ];
}
