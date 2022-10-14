<?php

namespace App\Filament\Resources\ServiceInstResource\Pages;

use App\Filament\Resources\ServiceInstResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServiceInst extends EditRecord
{
    protected static string $resource = ServiceInstResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
