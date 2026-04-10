<?php

namespace App\Filament\Resources\InformasiPerumahans\Pages;

use App\Filament\Resources\InformasiPerumahans\InformasiPerumahanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditInformasiPerumahan extends EditRecord
{
    protected static string $resource = InformasiPerumahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
