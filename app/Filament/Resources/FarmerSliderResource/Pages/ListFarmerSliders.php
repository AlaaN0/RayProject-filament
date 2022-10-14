<?php

namespace App\Filament\Resources\FarmerSliderResource\Pages;

use App\Filament\Resources\FarmerSliderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFarmerSliders extends ListRecords
{
    protected static string $resource = FarmerSliderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
