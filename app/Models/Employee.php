<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'position',
        'branch_id',
    ];

    // Relación: el empleado pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación: el empleado trabaja en una sucursal
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    // Relación: el empleado puede ser asignado como instructor de varios clientes
    public function instructorAssignments()
    {
        return $this->hasMany(CustomerInstructor::class);
    }
}
