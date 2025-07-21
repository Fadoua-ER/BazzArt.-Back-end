<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $table = 'categories';

    protected $primaryKey = 'category_id';

    protected $fillable = [
        'category_name',
        'category_description'
    ];
    
    /** 
     * This function gets the subcategories that belong to the category
    */

    public function subcategories(): HasMany
    {
        return $this->HasMany(SubCategory::class);
    }

    /** 
     * This function gets the artworks that belong to the category
    */

    public function artworks() : HasMany
    {
        return $this->hasMany(Artwork::class);
    }

    use HasFactory;
}
