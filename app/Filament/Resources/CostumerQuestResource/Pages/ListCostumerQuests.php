<?php

namespace App\Filament\Resources\CostumerQuestResource\Pages;

use App\Filament\Resources\CostumerQuestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCostumerQuests extends ListRecords
{
    protected static string $resource = CostumerQuestResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
