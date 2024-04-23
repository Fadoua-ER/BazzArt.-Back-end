<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    protected $table = 'carts';

    protected $primaryKey = 'cart_id';
    
    protected $fillable = [
        'cart_code',
        'total',
        'cart_status'
    ];

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    use HasFactory;
}
