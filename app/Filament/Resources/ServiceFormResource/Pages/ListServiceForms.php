<?php

namespace App\Filament\Resources\ServiceFormResource\Pages;

use App\Filament\Resources\ServiceFormResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServiceForms extends ListRecords
{
    protected static string $resource = ServiceFormResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
