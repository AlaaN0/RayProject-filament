<?php

namespace App\Filament\Resources\OrganizationRegulationResource\Pages;

use App\Filament\Resources\OrganizationRegulationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrganizationRegulation extends EditRecord
{
    protected static string $resource = OrganizationRegulationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
