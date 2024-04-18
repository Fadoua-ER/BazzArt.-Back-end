<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Continent extends Model
{
    protected $table = 'continents';

    protected $primaryKey = 'continent_id';
    
    protected $fillable = [
        'continent_name'
    ];
    
    /** 
     * This function gets the countries that belong to the continent
    */

    public function countries() : HasMany
    {
        return $this->hasMany(Country::class);
    }

    /** 
     * This function gets the cities that belong to the continent to which belongs the country
    */

    public function cities() : HasManyThrough
    {
        return $this->hasManyThrough(City::class, Country::class);
    }
    
    /**
     * This function gets the artists that belongs the continent to which belongs the country 
    */

    public function artists(): HasManyThrough
    {
        return $this->hasManyThrough(Profil::class, Country::class);
    }

    /**
     * This function gets the clients that belongs the continent to which belongs the country 
    */

    public function clients(): HasManyThrough
    {
        return $this->hasManyThrough(Client::class, Country::class);
    }


    use HasFactory;
}
