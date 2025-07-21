<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AdminMessageType extends Model
{
    protected $table = 'admin_message_types';

    protected $primaryKey = 'type_id';
    
    protected $fillable = [
        'type_name',
        'type_description'
    ];
    
    /** 
     * This function gets the messages that belong to the type
    */

    public function messages() : HasMany
    {
        return $this->hasMany(AdministrationMessage::class);
    }

    use HasFactory;
}
