<?php

namespace App\Filament\Resources\InformasiPerumahans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class InformasiPerumahanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Select::make('LokasiPerumahan_id')
                ->relationship('lokasiPerumahan', 'NamaPerumahan')
                ->required()
                ->searchable()
                ->preload(),
                TextInput::make('status_ketersediaan')
                ->required(),
                TextInput::make('luas_tanah')
                ->numeric()
                ->required(),
                TextInput::make('luas_bangunan')
                ->numeric()
                ->required(),
                TextInput::make('jumlah_kamar')
                ->numeric()
                ->required(),
                TextInput::make('tahun_dibangun')
                ->numeric()
                ->required(),
                TextInput::make('desain')
                ->required(),
                TextInput::make('harga_properti')
                ->numeric()
                ->required(),
                TextInput::make('alamat_lengkap')
                ->required(),
            ]);
    }
}
