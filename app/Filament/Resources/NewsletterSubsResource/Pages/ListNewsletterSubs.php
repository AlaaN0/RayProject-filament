<?php

namespace App\Filament\Resources\NewsletterSubsResource\Pages;

use App\Filament\Resources\NewsletterSubsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNewsletterSubs extends ListRecords
{
    protected static string $resource = NewsletterSubsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
