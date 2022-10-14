<?php

namespace App\Filament\Resources\NewsletterSubsResource\Pages;

use App\Filament\Resources\NewsletterSubsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewsletterSubs extends EditRecord
{
    protected static string $resource = NewsletterSubsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
