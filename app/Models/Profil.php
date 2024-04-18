<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{ 
    protected $table = 'profils';

    protected $primaryKey = 'artist_id';
    
    protected $fillable = [
        'artist_firstname',
        'artist_lastname',
        'artist_username',
        'biography',
        'artist_birthday',
        'artist_email',
        'artist_picture',
        'current_country',
        'artist_phone_code',
        'artist_phone_number'
    ];
    
    protected $hidden = [
        'artist_password'
    ];

    use HasFactory;
}
