<?php

namespace App\Filament\Resources\Promosis\Pages;

use App\Filament\Resources\Promosis\PromosiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPromosis extends ListRecords
{
    protected static string $resource = PromosiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
