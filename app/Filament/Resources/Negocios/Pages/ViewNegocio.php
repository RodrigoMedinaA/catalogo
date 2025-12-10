<?php

namespace App\Filament\Resources\Negocios\Pages;

use App\Filament\Resources\Negocios\NegocioResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewNegocio extends ViewRecord
{
    protected static string $resource = NegocioResource::class;

    public function getTitle(): string
    {
        return 'Ver ' . $this->record->nombre_negocio;
    }

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
