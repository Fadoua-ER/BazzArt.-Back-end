<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpComment extends Model
{
    protected $table = 'help_comments';

    protected $primaryKey = 'helpcomment_id';
    
    protected $fillable = [
        'visitor_comment',
        'publication_date',
        'visitor'
    ];
    
    protected $hidden = [

    ];

    use HasFactory;
}
