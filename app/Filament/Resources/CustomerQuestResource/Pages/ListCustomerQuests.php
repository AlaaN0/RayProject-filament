<?php

namespace App\Filament\Resources\CustomerQuestResource\Pages;

use App\Filament\Resources\CustomerQuestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustomerQuests extends ListRecords
{
    protected static string $resource = CustomerQuestResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
