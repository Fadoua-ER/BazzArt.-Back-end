<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    
    /**
     * This function gets the client to which the transaction belongs
    */

    public function clients(): BelongsTo
    {
        return $this->belongTo(Client::class);
    }

    /**
     * This function gets the artist to which the transaction belongs
    */

    public function artist(): BelongsTo
    {
        return $this->belongTo(Profil::class);
    }



    use HasFactory;
}
