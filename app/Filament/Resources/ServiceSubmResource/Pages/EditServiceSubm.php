<?php

namespace App\Filament\Resources\ServiceSubmResource\Pages;

use App\Filament\Resources\ServiceSubmResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServiceSubm extends EditRecord
{
    protected static string $resource = ServiceSubmResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
