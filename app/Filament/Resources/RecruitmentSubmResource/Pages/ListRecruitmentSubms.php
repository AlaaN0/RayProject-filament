<?php

namespace App\Filament\Resources\RecruitmentSubmResource\Pages;

use App\Filament\Resources\RecruitmentSubmResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRecruitmentSubms extends ListRecords
{
    protected static string $resource = RecruitmentSubmResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
