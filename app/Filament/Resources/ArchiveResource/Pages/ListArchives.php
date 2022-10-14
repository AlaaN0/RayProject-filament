<?php

namespace App\Filament\Resources\ArchiveResource\Pages;

use App\Filament\Resources\ArchiveResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArchives extends ListRecords
{
    protected static string $resource = ArchiveResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
