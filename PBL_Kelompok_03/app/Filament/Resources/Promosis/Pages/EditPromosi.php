<?php

namespace App\Filament\Resources\Promosis\Pages;

use App\Filament\Resources\Promosis\PromosiResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPromosi extends EditRecord
{
    protected static string $resource = PromosiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
