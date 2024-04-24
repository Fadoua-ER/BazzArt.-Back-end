<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    protected $table = 'clients';

    protected $primaryKey = 'client_id';

    protected $fillable = [
        'client_firstname',
        'client_lastname',
        'client_birthday',
        'client_email',
        'client_password',
        'client_adresse',
        'client_picture',
        'country',
        'client_phone_code',
        'client_phone_number'
    ];

    protected $hidden = [
        'client_password'
    ];

    /**
     * This function gets the transactions of the client
    */

    public function transactions() : HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    /**
     * This function gets the comments of the client
    */

    public function comments() : HasMany
    {
        return $this->hasMany(ClientComment::class);
    }

    /**
     * This function gets the country to which the client belongs
    */

    public function country(): BelongsTo
    {
        return $this->belongTo(Country::class);
    }

    use HasFactory;
}
