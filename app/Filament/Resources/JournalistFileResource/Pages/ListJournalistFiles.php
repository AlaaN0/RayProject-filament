<?php

namespace App\Filament\Resources\JournalistFileResource\Pages;

use App\Filament\Resources\JournalistFileResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJournalistFiles extends ListRecords
{
    protected static string $resource = JournalistFileResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
