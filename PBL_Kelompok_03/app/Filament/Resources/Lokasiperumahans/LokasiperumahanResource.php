<?php

namespace App\Filament\Resources\Lokasiperumahans;

use App\Filament\Resources\Lokasiperumahans\Pages\CreateLokasiperumahan;
use App\Filament\Resources\Lokasiperumahans\Pages\EditLokasiperumahan;
use App\Filament\Resources\Lokasiperumahans\Pages\ListLokasiperumahans;
use App\Filament\Resources\Lokasiperumahans\Schemas\LokasiperumahanForm;
use App\Filament\Resources\Lokasiperumahans\Tables\LokasiperumahansTable;
use App\Models\Lokasiperumahan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LokasiperumahanResource extends Resource
{
    protected static ?string $model = Lokasiperumahan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Lokasi Perumahan';

    public static function form(Schema $schema): Schema
    {
        return LokasiperumahanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LokasiperumahansTable::configure($table);
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
            'index' => ListLokasiperumahans::route('/'),
            'create' => CreateLokasiperumahan::route('/create'),
            'edit' => EditLokasiperumahan::route('/{record}/edit'),
        ];
    }
}
