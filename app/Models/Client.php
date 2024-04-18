<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    protected $primaryKey = 'client_id';
    
    protected $fillable = [
        'client_firstname',
        'client_lastname',
        'client_birthday',
        'client_email',
        'client_adresse',
        'client_picture',
        'country',
        'client_phone_code',
        'client_phone_number'
    ];
    
    protected $hidden = [
        'client_password'
    ];

    use HasFactory;
}
