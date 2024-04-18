<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';

    protected $primaryKey = 'status_id';
    
    protected $fillable = [
        'status_name',
        'status_description'
    ];
    
    protected $hidden = [

    ];

    use HasFactory;
}
