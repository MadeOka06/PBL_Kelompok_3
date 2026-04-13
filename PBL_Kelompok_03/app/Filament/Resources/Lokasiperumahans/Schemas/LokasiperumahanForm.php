<?php

namespace App\Filament\Resources\LokasiPerumahans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;

class LokasiPerumahanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
               Group::make([ 
                TextInput::make('nama perumahan')
                ->required()
                ->minlength(3),
                TextInput::make('alamat')
                ->required()
                ->minlength(3),
                TextInput::make('daerah')
                ->required()
                ->minlength(3)
                ]),
            ]);
    }
}
