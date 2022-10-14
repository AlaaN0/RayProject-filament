<?php

namespace App\Filament\Resources\OrganizationIdentityResource\Pages;

use App\Filament\Resources\OrganizationIdentityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrganizationIdentity extends EditRecord
{
    protected static string $resource = OrganizationIdentityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
