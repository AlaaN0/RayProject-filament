<?php

namespace App\Filament\Resources\DataReportResource\Pages;

use App\Filament\Resources\DataReportResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataReports extends ListRecords
{
    protected static string $resource = DataReportResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
