<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    
    /**
     * This function gets the admin to which the message belongs
     * The admin who sent the message
    */

    public function admin(): BelongsTo
    {
        return $this->belongTo(Administrator::class);
    }

    /**
     * This function gets the artist to which the message belongs
     * The artist who received the message 
    */

    public function artist(): BelongsTo
    {
        return $this->belongTo(Profil::class);
    }

    /**
     * This function gets the type to which the message belongs
     * I will give the types similar to (Warning, News, Infos, etc...)
    */

    public function type(): BelongsTo
    {
        return $this->belongTo(AdminMessageType::class);
    }

    use HasFactory;
}
