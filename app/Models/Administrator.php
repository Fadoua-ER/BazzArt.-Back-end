<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    protected $table = 'administrators';

    protected $primaryKey = 'admin_id';
    
    protected $fillable = [
        'email',
        'phone_number',
        'picture',
        'role'
    ];
    
    protected $hidden = [
        'password'
    ];

    use HasFactory;
}
