<?php

namespace App\Filament\Resources\VotingQuestResource\Pages;

use App\Filament\Resources\VotingQuestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVotingQuests extends ListRecords
{
    protected static string $resource = VotingQuestResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
