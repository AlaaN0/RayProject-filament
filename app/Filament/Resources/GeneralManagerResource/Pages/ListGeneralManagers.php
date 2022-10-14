<?php

namespace App\Filament\Resources\GeneralManagerResource\Pages;

use App\Filament\Resources\GeneralManagerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGeneralManagers extends ListRecords
{
    protected static string $resource = GeneralManagerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
