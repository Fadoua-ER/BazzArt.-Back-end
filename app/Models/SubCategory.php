<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'sub_categories';

    protected $primaryKey = 'subcategory_id';
    
    protected $fillable = [
        'subcategory_name',
        'subcategory_description',
        'category'
    ];
    
    protected $hidden = [   

    ];

    use HasFactory;
}
