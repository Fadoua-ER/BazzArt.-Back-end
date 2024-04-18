<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminMessageType extends Model
{
    protected $table = 'admin_message_types';

    protected $primaryKey = 'type_id';
    
    protected $fillable = [
        'type_name',
        'type_description'
    ];
    
    protected $hidden = [

    ];

    use HasFactory;
}
