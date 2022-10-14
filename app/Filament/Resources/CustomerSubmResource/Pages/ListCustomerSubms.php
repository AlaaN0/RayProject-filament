<?php

namespace App\Filament\Resources\CustomerSubmResource\Pages;

use App\Filament\Resources\CustomerSubmResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustomerSubms extends ListRecords
{
    protected static string $resource = CustomerSubmResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
