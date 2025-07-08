<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'message',
        'type',
        'seen',
    ];

    // Relación: la notificación pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
