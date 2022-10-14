<?php

namespace App\Filament\Resources\OrganizationBranchResource\Pages;

use App\Filament\Resources\OrganizationBranchResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrganizationBranches extends ListRecords
{
    protected static string $resource = OrganizationBranchResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
