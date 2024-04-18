<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $table = 'visitors';

    protected $primaryKey = 'visitor_id';
    
    protected $fillable = [
        'visitor_firstname',
        'visitor_lastname',
        'visitor_email'
    ];
    
    protected $hidden = [

    ];

    use HasFactory;
}
