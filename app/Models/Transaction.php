<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';

    protected $primaryKey = 'transaction_id';
    
    protected $fillable = [
        'transaction_code',
        'transaction_date',
        'transaction_client',
        'transaction_artist',
        'transaction_artwork'
    ];
    
    protected $hidden = [

    ];

    use HasFactory;
}
