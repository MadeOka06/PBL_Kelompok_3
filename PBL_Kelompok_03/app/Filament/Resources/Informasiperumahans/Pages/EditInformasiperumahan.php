<?php

namespace App\Filament\Resources\Informasiperumahans\Pages;

use App\Filament\Resources\Informasiperumahans\InformasiperumahanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditInformasiperumahan extends EditRecord
{
    protected static string $resource = InformasiperumahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
