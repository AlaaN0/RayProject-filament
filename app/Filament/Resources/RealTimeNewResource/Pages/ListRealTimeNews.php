<?php

namespace App\Filament\Resources\RealTimeNewResource\Pages;

use App\Filament\Resources\RealTimeNewResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRealTimeNews extends ListRecords
{
    protected static string $resource = RealTimeNewResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
