<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class SubCategory extends Model
{
    protected $table = 'sub_categories';

    protected $primaryKey = 'subcategory_id';
    
    protected $fillable = [
        'subcategory_name',
        'subcategory_description',
        'category'
    ];
    
    /** 
     * This function gets the category to which belongs the subcategory
    */

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /** 
     * This function gets the artworks that belong to the category to which belongs the subcategory
    */

    public function artworks() : HasManyThrough
    {
        return $this->hasManyThrough(Artwork::class, Category::class);
    }

    use HasFactory;
}
