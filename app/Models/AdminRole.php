<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AdminRole extends Model
{
    protected $table = 'admin_roles';

    protected $primaryKey = 'role_id';
    
    protected $fillable = [
        'role_name',
        'role_description'
    ];
    
    /**
     * This function gets the admins that belongs to the role
    */

    public function admins(): BelongsToMany
    {
        return $this->belongsToMany(Administrator::class);
    }

    use HasFactory;
}
