<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Administrator extends Authenticatable
{
    use HasApiTokens, HasFactory;

    protected $table = 'administrators';

    protected $fillable = [
        'email',
        'phone_number',
        'password',
        'picture',
        'api_token',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'api_token',
    ];

    /**
     * The role that belong to the admin
     */

    public function role(): HasOne
    {
        return $this->hasOne(AdminRole::class);
    }

}
