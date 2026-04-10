<?php

namespace App\Filament\Resources\Lokasiperumahans\Pages;

use App\Filament\Resources\Lokasiperumahans\LokasiperumahanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLokasiperumahans extends ListRecords
{
    protected static string $resource = LokasiperumahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
