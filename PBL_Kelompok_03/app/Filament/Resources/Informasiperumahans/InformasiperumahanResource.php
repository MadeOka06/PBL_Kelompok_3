<?php

namespace App\Filament\Resources\InformasiPerumahans;

use App\Filament\Resources\InformasiPerumahans\Pages\CreateInformasiPerumahan;
use App\Filament\Resources\InformasiPerumahans\Pages\EditInformasiPerumahan;
use App\Filament\Resources\InformasiPerumahans\Pages\ListInformasiPerumahans;
use App\Filament\Resources\InformasiPerumahans\Schemas\InformasiPerumahanForm;
use App\Filament\Resources\InformasiPerumahans\Tables\InformasiPerumahansTable;
use App\Models\InformasiPerumahan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InformasiPerumahanResource extends Resource
{
    protected static ?string $model = InformasiPerumahan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Informasi Perumahan';

    public static function form(Schema $schema): Schema
    {
        return InformasiPerumahanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InformasiPerumahansTable::configure($table);
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
            'index' => ListInformasiPerumahans::route('/'),
            'create' => CreateInformasiPerumahan::route('/create'),
            'edit' => EditInformasiPerumahan::route('/{record}/edit'),
        ];
    }
}
