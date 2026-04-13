<?php

namespace App\Filament\Resources\LokasiPerumahans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\select;
use Filament\Schemas\Components\Group;

class LokasiPerumahanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
               Group::make([ 
                Select::make("category_id")
                ->relationship("category", "tipeperumahan")
                ->preload()
                ->searchable()
                ->required(),
                TextInput::make("nama perumahan")
                ->required()
                ->minlength(3),
                TextInput::make("alamat")
                ->required()
                ->minlength(3),
                TextInput::make("daerah")
                ->required()
                ->minlength(3),
                FileUpload::make("image")
                ->disk("public")
                ->directory("LokasiPerumahans")
                ]),
            ]);
    }
}
