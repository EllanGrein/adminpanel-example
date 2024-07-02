<?php

namespace App\Enums;

enum UserRoles: int
{
    case COMMON = 1;
    case ADMIN = 2;

    public function description(): string
    {
        return match($this) {
            self::COMMON => 'Пользователь',
            self::ADMIN => 'Администратор',
        };
    }
}
