<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerInstructor extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'employee_id',
        'assigned_at',
        'comment',
    ];

    // Relación: esta asignación pertenece a un cliente
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Relación: esta asignación pertenece a un instructor (empleado)
    public function instructor()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
