<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status',
        'maintenance_date',
        'branch_id',
    ];

    // Relación: el equipo pertenece a una sucursal
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
