<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'duration_days',
        'benefits',
    ];

    protected $casts = [
        'benefits' => 'array',
    ];

    // Relación: un plan puede tener muchas membresías
    public function memberships()
    {
        return $this->hasMany(Membership::class);
    }
}
