<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Artwork extends Model
{
    protected $table = 'artworks';

    protected $primaryKey = 'artwork_id';
    
    protected $fillable = [
        'artwork_code',
        'artwork_name',
        'artwork_description',
        'picture',
        'creation_date',
        'publication_date',
        'price',
        'validation',
        'artwork_status',
        'owner',
        'category',
        'location_country',
        'location_city'
    ];
    
    /** 
     * This function gets the comments of the client
    */

    public function comments() : HasManyThrough
    {
        return $this->hasMany(ClientComment::class, Client::class);
    }

    /**
     * This function gets the artist to which the artwork belongs
    */

    public function artist(): BelongsTo
    {
        return $this->belongTo(Profil::class);
    }

    use HasFactory;
}
