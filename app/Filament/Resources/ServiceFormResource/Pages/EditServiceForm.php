<?php

namespace App\Filament\Resources\ServiceFormResource\Pages;

use App\Filament\Resources\ServiceFormResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServiceForm extends EditRecord
{
    protected static string $resource = ServiceFormResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
