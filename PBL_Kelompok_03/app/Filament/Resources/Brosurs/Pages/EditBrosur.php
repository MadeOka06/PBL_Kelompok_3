<?php

namespace App\Filament\Resources\Brosurs\Pages;

use App\Filament\Resources\Brosurs\BrosurResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBrosur extends EditRecord
{
    protected static string $resource = BrosurResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
