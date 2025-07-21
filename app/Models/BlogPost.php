<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    
    /**
     * This function gets the admin to which the post belongs
     * The Blog is like a documentation of the website 
     * The admins can post informations about the new fonctionalities and features of the website etc..
    */

    public function admin(): BelongsTo
    {
        return $this->belongTo(Administrator::class);
    }

    use HasFactory;
}
