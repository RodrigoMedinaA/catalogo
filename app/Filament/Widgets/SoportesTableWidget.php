<?php

namespace App\Filament\Widgets;

use App\Enums\Criticidad;
use App\Models\Soporte;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class SoportesTableWidget extends TableWidget
{
    protected static ?string $heading = 'Servicios de Soporte Técnico y TI';
    
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(fn (): Builder => Soporte::query())
            ->columns([
                TextColumn::make('nombre_soporte')
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
            ->defaultSort('nombre_soporte');
    }
}

