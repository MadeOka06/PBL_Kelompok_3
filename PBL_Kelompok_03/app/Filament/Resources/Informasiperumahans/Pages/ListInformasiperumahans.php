<?php

namespace App\Filament\Resources\Informasiperumahans\Pages;

use App\Filament\Resources\Informasiperumahans\InformasiperumahanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInformasiperumahans extends ListRecords
{
    protected static string $resource = InformasiperumahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
