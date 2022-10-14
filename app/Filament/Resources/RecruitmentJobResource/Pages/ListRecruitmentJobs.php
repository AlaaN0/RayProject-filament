<?php

namespace App\Filament\Resources\RecruitmentJobResource\Pages;

use App\Filament\Resources\RecruitmentJobResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRecruitmentJobs extends ListRecords
{
    protected static string $resource = RecruitmentJobResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
