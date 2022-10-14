<?php

namespace App\Filament\Resources\DataResearchResource\Pages;

use App\Filament\Resources\DataResearchResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDataResearch extends EditRecord
{
    protected static string $resource = DataResearchResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
