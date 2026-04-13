<?php

namespace App\Filament\Resources\Brosurs\Pages;

use App\Filament\Resources\Brosurs\BrosurResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBrosurs extends ListRecords
{
    protected static string $resource = BrosurResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
