<?php

namespace App\Filament\Resources\RecruitmentSubmResource\Pages;

use App\Filament\Resources\RecruitmentSubmResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRecruitmentSubm extends EditRecord
{
    protected static string $resource = RecruitmentSubmResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
