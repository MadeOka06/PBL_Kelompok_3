<?php

namespace App\Filament\Resources\Promosis\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

class PromosiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Select::make('LokasiPerumahan_id')
                ->relationship('lokasiPerumahan', 'nama_perumahan')
                ->required()
                ->searchable()
                ->preload(),
                TextInput::make('NamaPromosi')
                ->required(),
                TextInput::make('Deskripsi')
                ->required(),
                DatePicker::make('TanggalUpload')
                ->required(),
            ]);
    }
}
