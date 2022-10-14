<?php

namespace App\Filament\Resources\AlRayResource\Pages;

use App\Filament\Resources\AlRayResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAlRay extends EditRecord
{
    protected static string $resource = AlRayResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
