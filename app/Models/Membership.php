<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'plan_id',
        'start_date',
        'end_date',
        'status',
    ];

    // Relación: esta membresía pertenece a un cliente
    public function customer()
    {
        return $this->hasOne(Customer::class);
    }

    // Relación: esta membresía está asociada a un plan
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
