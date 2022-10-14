<?php

namespace App\Filament\Resources\RealTimeNewResource\Pages;

use App\Filament\Resources\RealTimeNewResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRealTimeNew extends EditRecord
{
    protected static string $resource = RealTimeNewResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
