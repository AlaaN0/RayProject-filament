<?php

namespace App\Filament\Resources\VotingQuestResource\Pages;

use App\Filament\Resources\VotingQuestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVotingQuest extends EditRecord
{
    protected static string $resource = VotingQuestResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
