<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    protected $table = 'continents';

    protected $primaryKey = 'continent_id';
    
    protected $fillable = [
        'continent_name'
    ];
    
    protected $hidden = [

    ];

    use HasFactory;
}
