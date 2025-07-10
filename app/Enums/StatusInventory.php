<?php

namespace App\Enums;

enum StatusInventory: string
{
    case ACTIVO = 'activo';
    case EN_MANTENIMIENTO = 'en_mantenimiento';
    case INACTIVO = 'inactivo';

    public function label(): string
    {
        return match ($this) {
            self::ACTIVO => 'Activo',
            self::EN_MANTENIMIENTO => 'En mantenimiento',
            self::INACTIVO => 'Inactivo',
        };
    }
}
