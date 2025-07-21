<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    
    /**
     * This function gets the client to which the comment belongs
    */

    public function client(): BelongsTo
    {
        return $this->belongTo(Client::class);
    }

    /**
     * This function gets the artwork to which the comment belongs
    */

    public function artwork(): BelongsTo
    {
        return $this->belongTo(Artwork::class);
    }

    use HasFactory;
}
