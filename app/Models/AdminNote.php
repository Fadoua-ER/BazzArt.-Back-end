<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdminNote extends Model
{
    use HasFactory;
    protected $table = 'admin_notes';

    protected $primaryKey = 'admin_note_id';

    protected $fillable = [
        'note',
        'note_creating_date',
        'analytics_admin'
    ];

    public function analytics_admin(): BelongsTo
    {
        return $this->belongsTo(Administrator::class);
    }
}
