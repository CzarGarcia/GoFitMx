<?php

namespace App\Models;

use App\Enums\UserRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'role' => UserRoles::class,
    ];



    // Relación: el usuario puede ser cliente
    public function customer()
    {
        return $this->hasOne(Customer::class);
    }

    // Relación: el usuario puede ser empleado
    public function employee()
    {
        return $this->hasOne(Employee::class);
    }

    // Relación: el usuario puede recibir muchas notificaciones
    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
}
