<?php

namespace App\Enums;

enum UserRoles: string
{
    case ADMIN = 'admin';
    case EMPLEADO = 'employee';
    case CLIENTE = 'customer';

    public function label(): string
    {
        return match ($this) {
            self::ADMIN => 'Administrador',
            self::EMPLEADO => 'Empleado',
            self::CLIENTE => 'Cliente',
        };
    }
}
