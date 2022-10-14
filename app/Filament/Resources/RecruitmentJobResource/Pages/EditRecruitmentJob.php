<?php

namespace App\Filament\Resources\RecruitmentJobResource\Pages;

use App\Filament\Resources\RecruitmentJobResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRecruitmentJob extends EditRecord
{
    protected static string $resource = RecruitmentJobResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
