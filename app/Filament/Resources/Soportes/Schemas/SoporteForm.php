<?php

namespace App\Filament\Resources\Soportes\Schemas;

use App\Enums\Criticidad;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SoporteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre_soporte')
                    ->required(),
                Textarea::make('descripcion')
                    ->required()
                    ->columnSpanFull(),
                Select::make('categoria_id')
                    ->relationship('categoria', 'nombre_categoria')
                    ->label('Categoría')
                    ->searchable()
                    ->preload(),
                Select::make('criticidad')
                    ->options(Criticidad::class)
                    ->label('Criticidad'),
                TextInput::make('tiempo_estimado')
                    ->numeric(),
                TextInput::make('sla_respuesta')
                    ->numeric(),
                TextInput::make('sla_resolucion')
                    ->numeric(),
                TextInput::make('responsable'),
            ]);
    }
}
