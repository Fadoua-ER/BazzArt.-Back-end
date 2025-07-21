<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    protected $table = 'cities';

    protected $primaryKey = 'city_id';

    protected $fillable = [
        'city_name',
        'postal_code',
        'city_region',
        'country'
    ];

    /**
     * This function gets the country to which the city belongs
    */

    public function country(): BelongsTo
    {
        return $this->belongTo(Country::class);
    }

    use HasFactory;
}
