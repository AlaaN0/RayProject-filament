<?php

namespace App\Filament\Resources\ServiceQuestResource\Pages;

use App\Filament\Resources\ServiceQuestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServiceQuests extends ListRecords
{
    protected static string $resource = ServiceQuestResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
