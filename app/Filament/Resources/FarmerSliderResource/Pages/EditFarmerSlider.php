<?php

namespace App\Filament\Resources\FarmerSliderResource\Pages;

use App\Filament\Resources\FarmerSliderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFarmerSlider extends EditRecord
{
    protected static string $resource = FarmerSliderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
