<?php

namespace App\Filament\Resources\CustomerSubmResource\Pages;

use App\Filament\Resources\CustomerSubmResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCustomerSubm extends EditRecord
{
    protected static string $resource = CustomerSubmResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
