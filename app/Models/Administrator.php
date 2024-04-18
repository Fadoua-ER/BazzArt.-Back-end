<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    /**
     * The role that belong to the admin
     */

    public function role(): HasOne
    {
        return $this->hasOne(AdminRole::class);
    }

    use HasFactory;
}
