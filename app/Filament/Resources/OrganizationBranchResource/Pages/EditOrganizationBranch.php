<?php

namespace App\Filament\Resources\OrganizationBranchResource\Pages;

use App\Filament\Resources\OrganizationBranchResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrganizationBranch extends EditRecord
{
    protected static string $resource = OrganizationBranchResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
