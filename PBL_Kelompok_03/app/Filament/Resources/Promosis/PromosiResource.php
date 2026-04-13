<?php

namespace App\Filament\Resources\Promosis;

use App\Filament\Resources\Promosis\Pages\CreatePromosi;
use App\Filament\Resources\Promosis\Pages\EditPromosi;
use App\Filament\Resources\Promosis\Pages\ListPromosis;
use App\Filament\Resources\Promosis\Schemas\PromosiForm;
use App\Filament\Resources\Promosis\Tables\PromosisTable;
use App\Models\Promosi;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PromosiResource extends Resource
{
    protected static ?string $model = Promosi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return PromosiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PromosisTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPromosis::route('/'),
            'create' => CreatePromosi::route('/create'),
            'edit' => EditPromosi::route('/{record}/edit'),
        ];
    }
}
