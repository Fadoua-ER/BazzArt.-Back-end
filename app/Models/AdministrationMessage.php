<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdministrationMessage extends Model
{
    protected $table = 'administration_messages';

    protected $primaryKey = 'admin_message_id';
    
    protected $fillable = [
        'message',
        'message_type',
        'concerned_profil',
        'responsible_admin'
    ];
    
    protected $hidden = [

    ];

    use HasFactory;
}
