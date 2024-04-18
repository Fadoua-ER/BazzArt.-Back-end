<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Country extends Model
{
    protected $table = 'countries';

    protected $primaryKey = 'country_id';
    
    protected $fillable = [
        'country_code',
        'country_name',
        'phone_code',
        'continent'
    ];

    /**
     * This function gets the cities tht belongs to the country
    */

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

    /**
     * This function gets the continent to which the country belongs
    */

    public function continent(): BelongsTo
    {
        return $this->belongTo(Continent::class);
    }

    
    /**
     * This function gets the artists that belongs the country 
    */

    public function artists(): HasMany
    {
        return $this->hasMany(Profil::class);
    }

    /**
     * This function gets the clients that belongs the country 
    */

    public function clients(): HasMany
    {
        return $this->hasMany(Client::class);
    }

    use HasFactory;
}
