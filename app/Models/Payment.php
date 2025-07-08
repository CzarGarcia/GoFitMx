<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'membership_id',
        'amount',
        'method',
        'paid_at',
    ];

    protected $casts = [
        'paid_at' => 'datetime',
    ];

    // Relación: el pago pertenece a un cliente
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Relación: el pago puede estar asociado a una membresía
    public function membership()
    {
        return $this->belongsTo(Membership::class);
    }
}
