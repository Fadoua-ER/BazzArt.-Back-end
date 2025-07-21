<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HelpComment extends Model
{
    protected $table = 'help_comments';

    protected $primaryKey = 'helpcomment_id';
    
    protected $fillable = [
        'visitor_comment',
        'publication_date',
        'visitor'
    ];
    
    /**
     * This function gets the visitor to which the comment belongs
    */

    public function visitor(): BelongsTo
    {
        return $this->belongTo(Visitor::class);
    }

    use HasFactory;
}
