<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('NamaPerumahan')
                ->required()
                ->minLength(3),
                TextInput::make('TipePerumahan')
                ->required()
                ->minLength(3),
            ]);
    }
}
