<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserRoleOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Admins', User::admins()->count()),
            Stat::make('Common Users', User::commons()->count())
        ];
    }
}
