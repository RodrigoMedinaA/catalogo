<?php

namespace App\Filament\Widgets;

use App\Enums\Criticidad;
use App\Models\Negocio;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class NegociosTableWidget extends TableWidget
{
    protected static ?string $heading = 'Servicios de Negocio';
    
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(fn (): Builder => Negocio::query())
            ->columns([
                TextColumn::make('nombre_negocio')
                    ->label('Nombre')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('categoria.nombre_categoria')
                    ->label('Categoría')
                    ->sortable(),
                TextColumn::make('criticidad')
                    ->badge()
                    ->color(fn (?Criticidad $state): string => $state?->getColor() ?? 'gray'),
            ])
            ->defaultSort('nombre_negocio');
    }
}

