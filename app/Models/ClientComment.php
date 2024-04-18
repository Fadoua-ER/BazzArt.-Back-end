<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientComment extends Model
{
    protected $table = 'client_comments';

    protected $primaryKey = 'accomment_id';
    
    protected $fillable = [
        'client_comment',
        'publication_date',
        'client',
        'artwork'
    ];
    
    protected $hidden = [

    ];

    use HasFactory;
}
