<?php

namespace App\Filament\Resources\Negocios;

use App\Filament\Resources\Negocios\Pages\CreateNegocio;
use App\Filament\Resources\Negocios\Pages\EditNegocio;
use App\Filament\Resources\Negocios\Pages\ListNegocios;
use App\Filament\Resources\Negocios\Pages\ViewNegocio;
use App\Filament\Resources\Negocios\Schemas\NegocioForm;
use App\Filament\Resources\Negocios\Schemas\NegocioInfolist;
use App\Filament\Resources\Negocios\Tables\NegociosTable;
use App\Models\Negocio;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class NegocioResource extends Resource
{
    protected static ?string $model = Negocio::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'Servicios de negocio';
    protected static ?string $pluralModelLabel = 'Servicios de negocio';

    protected static ?string $recordTitleAttribute = 'nombre';

    public static function form(Schema $schema): Schema
    {
        return NegocioForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return NegocioInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NegociosTable::configure($table);
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
            'index' => ListNegocios::route('/'),
            'create' => CreateNegocio::route('/create'),
            'view' => ViewNegocio::route('/{record}'),
            'edit' => EditNegocio::route('/{record}/edit'),
        ];
    }
}
