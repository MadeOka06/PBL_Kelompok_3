<?php

namespace App\Filament\Resources\Lokasiperumahans\Pages;

use App\Filament\Resources\Lokasiperumahans\LokasiperumahanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLokasiperumahan extends EditRecord
{
    protected static string $resource = LokasiperumahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
