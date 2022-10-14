<?php

namespace App\Filament\Resources\DirectorResource\Pages;

use App\Filament\Resources\DirectorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDirectors extends ListRecords
{
    protected static string $resource = DirectorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
