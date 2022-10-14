<?php

namespace App\Filament\Resources\OrganizationIdentityResource\Pages;

use App\Filament\Resources\OrganizationIdentityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrganizationIdentities extends ListRecords
{
    protected static string $resource = OrganizationIdentityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
