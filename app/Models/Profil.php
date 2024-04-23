<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

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
        'artist_phone_number',
        'account_validation'
    ];
    
    protected $hidden = [
        'artist_password'
    ];

    /** 
     * This function gets the artworks that belong to the artist
    */

    public function artworks() : HasMany
    {
        return $this->hasMany(Artwork::class);
    }

    /** 
     * This function gets the transactions of the artist
    */

    public function transactions() : HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    /** 
     * This function gets the clients of the artist
    */

    public function clients() : HasManyThrough
    {
        return $this->hasManyThrough(Client::class, Artwork::class);
    }

    /** 
     * This function gets the administration messages of the artist as notifications
    */

    public function notifications() : HasMany
    {
        return $this->hasMany(AdminMessage::class);
    }

    /**
     * This function gets the country to which the artist belongs
    */

    public function country(): BelongsTo
    {
        return $this->belongTo(Country::class);
    }


    use HasFactory;
}
