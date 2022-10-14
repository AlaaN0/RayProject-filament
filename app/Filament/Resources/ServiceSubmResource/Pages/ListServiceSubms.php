<?php

namespace App\Filament\Resources\ServiceSubmResource\Pages;

use App\Filament\Resources\ServiceSubmResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServiceSubms extends ListRecords
{
    protected static string $resource = ServiceSubmResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
