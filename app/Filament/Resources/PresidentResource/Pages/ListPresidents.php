<?php

namespace App\Filament\Resources\PresidentResource\Pages;

use App\Filament\Resources\PresidentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPresidents extends ListRecords
{
    protected static string $resource = PresidentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
