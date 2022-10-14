<?php

namespace App\Filament\Resources\VotingSubmResource\Pages;

use App\Filament\Resources\VotingSubmResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVotingSubms extends ListRecords
{
    protected static string $resource = VotingSubmResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
