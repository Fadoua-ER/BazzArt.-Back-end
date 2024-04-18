<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status extends Model
{
    protected $table = 'statuses';

    protected $primaryKey = 'status_id';
    
    protected $fillable = [
        'status_name',
        'status_description'
    ];
    
    /** 
     * This function gets the artworks that belong to the status
    */

    public function artworks() : HasMany
    {
        return $this->hasMany(Artwork::class);
    }


    use HasFactory;
}
