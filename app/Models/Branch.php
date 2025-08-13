<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Branch extends Model
{
    use HasFactory;

    protected $table = 'branches';

    protected $connection = 'mysql';

    protected $fillable = [
        'name',
        'description',
        'opening_hours',
        'closing_hours',
        'images',
        'address',
        'phone',
    ];

    protected $casts = [
        'images' => 'array',
    ];

    // Relación: Una sucursal tiene muchos empleados
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    // Relación: Una sucursal tiene muchos equipos/inventario
    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }
}
