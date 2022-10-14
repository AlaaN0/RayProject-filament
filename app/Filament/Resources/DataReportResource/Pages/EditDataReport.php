<?php

namespace App\Filament\Resources\DataReportResource\Pages;

use App\Filament\Resources\DataReportResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDataReport extends EditRecord
{
    protected static string $resource = DataReportResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
