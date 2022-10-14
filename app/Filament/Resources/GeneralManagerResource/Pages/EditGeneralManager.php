<?php

namespace App\Filament\Resources\GeneralManagerResource\Pages;

use App\Filament\Resources\GeneralManagerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGeneralManager extends EditRecord
{
    protected static string $resource = GeneralManagerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
