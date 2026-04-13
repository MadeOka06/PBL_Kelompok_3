<?php

namespace App\Filament\Resources\InformasiPerumahans\Pages;

use App\Filament\Resources\InformasiPerumahans\InformasiPerumahanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInformasiPerumahans extends ListRecords
{
    protected static string $resource = InformasiPerumahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
