<?php

namespace App\Filament\Resources\LokasiPerumahans;

use App\Filament\Resources\LokasiPerumahans\Pages\CreateLokasiPerumahan;
use App\Filament\Resources\LokasiPerumahans\Pages\EditLokasiPerumahan;
use App\Filament\Resources\LokasiPerumahans\Pages\ListLokasiPerumahans;
use App\Filament\Resources\LokasiPerumahans\Schemas\LokasiPerumahanForm;
use App\Filament\Resources\LokasiPerumahans\Tables\LokasiPerumahansTable;
use App\Models\LokasiPerumahan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LokasiPerumahanResource extends Resource
{
    protected static ?string $model = LokasiPerumahan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return LokasiPerumahanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LokasiPerumahansTable::configure($table);
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
            'index' => ListLokasiPerumahans::route('/'),
            'create' => CreateLokasiPerumahan::route('/create'),
            'edit' => EditLokasiPerumahan::route('/{record}/edit'),
        ];
    }
}
