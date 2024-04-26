<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Administrator extends Model
{
    use HasApiTokens, HasFactory;

    protected $table = 'administrators';

    protected $primaryKey = 'admin_id';

    protected $fillable = [
        'email',
        'phone_number',
        'password',
        'picture',
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    /**
     * The role that belong to the admin
     */

    public function role(): HasOne
    {
        return $this->hasOne(AdminRole::class);
    }

}
