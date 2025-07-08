<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'membership_id',
    ];

    // Relación: El cliente pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación: El cliente tiene una membresía activa
    public function membership()
    {
        return $this->belongsTo(Membership::class);
    }

    // Relación: El cliente puede tener muchas asignaciones de instructor
    public function instructorAssignments()
    {
        return $this->hasMany(CustomerInstructor::class);
    }

    // Relación: El cliente tiene muchos pagos
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
