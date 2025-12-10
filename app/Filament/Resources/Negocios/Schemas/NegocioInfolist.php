<?php

namespace App\Filament\Resources\Negocios\Schemas;

use App\Enums\Criticidad;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class NegocioInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('nombre_negocio'),
                TextEntry::make('descripcion')
                    ->columnSpanFull(),
                TextEntry::make('categoria.nombre_categoria')
                    ->label('Categoría'),
                TextEntry::make('criticidad')
                    ->badge()
                    ->color(fn (Criticidad $state): string => $state->getColor()),
                TextEntry::make('tiempo_estimado')
                    ->numeric(),
                TextEntry::make('sla_respuesta')
                    ->numeric(),
                TextEntry::make('sla_resolucion')
                    ->numeric(),
                TextEntry::make('responsable'),
            ]);
    }
}
