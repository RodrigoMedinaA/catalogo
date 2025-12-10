<?php

namespace App\Enums;

enum Criticidad: string
{
    case ALTA = 'alta';
    case MEDIA = 'media';
    case BAJA = 'baja';

    public function getLabel(): string
    {
        return match($this) {
            self::ALTA => 'Alta',
            self::MEDIA => 'Media',
            self::BAJA => 'Baja',
        };
    }

    public function getColor(): string
    {
        return match($this) {
            self::ALTA => 'danger',   // Rojo
            self::MEDIA => 'warning',  // Amarillo
            self::BAJA => 'info',      // Azul
        };
    }
}
