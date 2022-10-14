<?php

namespace App\Filament\Resources\VotingSubmResource\Pages;

use App\Filament\Resources\VotingSubmResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVotingSubm extends EditRecord
{
    protected static string $resource = VotingSubmResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
