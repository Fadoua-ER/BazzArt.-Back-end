<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'owner',
        'category',
        'location_country',
        'location_city'
    ];
    
    protected $hidden = [

    ];

    use HasFactory;
}
