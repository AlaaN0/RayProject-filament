<?php

namespace App\Filament\Resources\CustomerQuestResource\Pages;

use App\Filament\Resources\CustomerQuestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomerQuest extends CreateRecord
{
    protected static string $resource = CustomerQuestResource::class;
}
