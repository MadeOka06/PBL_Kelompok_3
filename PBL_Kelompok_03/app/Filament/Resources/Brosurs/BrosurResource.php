<?php

namespace App\Filament\Resources\Brosurs;

use App\Filament\Resources\Brosurs\Pages\CreateBrosur;
use App\Filament\Resources\Brosurs\Pages\EditBrosur;
use App\Filament\Resources\Brosurs\Pages\ListBrosurs;
use App\Filament\Resources\Brosurs\Schemas\BrosurForm;
use App\Filament\Resources\Brosurs\Tables\BrosursTable;
use App\Models\Brosur;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BrosurResource extends Resource
{
    protected static ?string $model = Brosur::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return BrosurForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BrosursTable::configure($table);
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
            'index' => ListBrosurs::route('/'),
            'create' => CreateBrosur::route('/create'),
            'edit' => EditBrosur::route('/{record}/edit'),
        ];
    }
}
