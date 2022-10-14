<?php

namespace App\Filament\Resources\JournalistFileResource\Pages;

use App\Filament\Resources\JournalistFileResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJournalistFile extends EditRecord
{
    protected static string $resource = JournalistFileResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
