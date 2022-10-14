<?php

namespace App\Filament\Resources\HeaderSliderResource\Pages;

use App\Filament\Resources\HeaderSliderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHeaderSlider extends EditRecord
{
    protected static string $resource = HeaderSliderResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
