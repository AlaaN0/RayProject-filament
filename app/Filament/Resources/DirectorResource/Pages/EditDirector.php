<?php

namespace App\Filament\Resources\DirectorResource\Pages;

use App\Filament\Resources\DirectorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDirector extends EditRecord
{
    protected static string $resource = DirectorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
