<?php

declare(strict_types=1);

namespace App\Filament\Shared\Resources\RoleResource\Pages;

use App\Filament\Shared\Resources\RoleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

final class ListRoles extends ListRecords
{
    protected static string $resource = RoleResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
