<?php

namespace App\Filament\Resources\HeaderSliderResource\Pages;

use App\Filament\Resources\HeaderSliderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHeaderSliders extends ListRecords
{
    protected static string $resource = HeaderSliderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
