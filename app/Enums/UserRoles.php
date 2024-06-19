<?php

namespace App\Enums;

enum UserRoles: int
{
    case USER = 1;
    case ADMIN = 2;

    public function description(): string
    {
        return match($this) {
            self::USER => 'Пользователь',
            self::ADMIN => 'Администратор',
        };
    }
}
