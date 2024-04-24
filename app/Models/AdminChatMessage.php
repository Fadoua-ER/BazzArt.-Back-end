<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdminChatMessage extends Model
{
    use HasFactory;

    protected $table = 'admin_chat_messages';

    protected $primaryKey = 'admin_chat_mssg_id';

    protected $fillable = [
        'chat_mssg',
        'message_sending_date',
        'sender_admin'
    ];

    public function sender_admin(): BelongsTo
    {
        return $this->belongsTo(Administrator::class);
    }
}
