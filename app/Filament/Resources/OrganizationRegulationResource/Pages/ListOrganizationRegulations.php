<?php

namespace App\Filament\Resources\OrganizationRegulationResource\Pages;

use App\Filament\Resources\OrganizationRegulationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrganizationRegulations extends ListRecords
{
    protected static string $resource = OrganizationRegulationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
