<?php

namespace App\Filament\Resources\JournalistFileResource\Pages;

use App\Filament\Resources\JournalistFileResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateJournalistFile extends CreateRecord
{
    protected static string $resource = JournalistFileResource::class;
}
