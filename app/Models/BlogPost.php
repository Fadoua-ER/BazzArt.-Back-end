<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $table = 'blog_posts';

    protected $primaryKey = 'post_id';
    
    protected $fillable = [
        'text_content',
        'file',
        'publication_date',
        'poster'
    ];
    
    protected $hidden = [

    ];

    use HasFactory;
}
