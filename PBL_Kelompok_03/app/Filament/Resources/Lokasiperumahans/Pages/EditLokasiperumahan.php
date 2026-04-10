<?php

namespace App\Filament\Resources\LokasiPerumahans\Pages;

use App\Filament\Resources\LokasiPerumahans\LokasiPerumahanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLokasiPerumahan extends EditRecord
{
    protected static string $resource = LokasiPerumahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
