<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    protected $primaryKey = 'city_id';
    
    protected $fillable = [
        'city_name',
        'city_province',
        'postal_code',
        'country'
    ];
    
    protected $hidden = [

    ];

    use HasFactory;
}
