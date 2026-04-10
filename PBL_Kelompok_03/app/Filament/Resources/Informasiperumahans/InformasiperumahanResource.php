<?php

namespace App\Filament\Resources\Informasiperumahans;

use App\Filament\Resources\Informasiperumahans\Pages\CreateInformasiperumahan;
use App\Filament\Resources\Informasiperumahans\Pages\EditInformasiperumahan;
use App\Filament\Resources\Informasiperumahans\Pages\ListInformasiperumahans;
use App\Filament\Resources\Informasiperumahans\Schemas\InformasiperumahanForm;
use App\Filament\Resources\Informasiperumahans\Tables\InformasiperumahansTable;
use App\Models\Informasiperumahan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InformasiperumahanResource extends Resource
{
    protected static ?string $model = Informasiperumahan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Informasi Perumahan';

    public static function form(Schema $schema): Schema
    {
        return InformasiperumahanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InformasiperumahansTable::configure($table);
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
            'index' => ListInformasiperumahans::route('/'),
            'create' => CreateInformasiperumahan::route('/create'),
            'edit' => EditInformasiperumahan::route('/{record}/edit'),
        ];
    }
}
