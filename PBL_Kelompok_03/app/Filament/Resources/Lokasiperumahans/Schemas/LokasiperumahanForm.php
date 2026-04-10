<?php

namespace App\Filament\Resources\LokasiPerumahans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LokasiPerumahanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('Nama Perumahan')
                ->required(),
                TextInput::make('alamat')
                ->required(),
                TextInput::make('daerah')
                ->required(),
            ]);
    }
}
