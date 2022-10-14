<?php

namespace App\Filament\Resources\PresidentResource\Pages;

use App\Filament\Resources\PresidentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePresident extends CreateRecord
{
    protected static string $resource = PresidentResource::class;
}
