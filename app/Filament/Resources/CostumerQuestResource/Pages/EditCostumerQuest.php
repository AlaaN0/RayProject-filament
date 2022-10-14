<?php

namespace App\Filament\Resources\CostumerQuestResource\Pages;

use App\Filament\Resources\CostumerQuestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCostumerQuest extends EditRecord
{
    protected static string $resource = CostumerQuestResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
