<?php

namespace App\Filament\Resources\LokasiPerumahans\Pages;

use App\Filament\Resources\LokasiPerumahans\LokasiPerumahanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLokasiPerumahans extends ListRecords
{
    protected static string $resource = LokasiPerumahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
