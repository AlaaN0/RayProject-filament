<?php

namespace App\Filament\Resources\ServiceQuestResource\Pages;

use App\Filament\Resources\ServiceQuestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServiceQuest extends EditRecord
{
    protected static string $resource = ServiceQuestResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
