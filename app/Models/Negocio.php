<?php

namespace App\Models;

use App\Enums\Criticidad;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Negocio extends Model
{
    protected $fillable = [
        'nombre_negocio',
        'descripcion',
        'id_categoria',
        'criticidad',
        'tiempo_estimado',
        'sla_respuesta',
        'sla_resolucion',
        'responsable',
    ];

    protected $casts = [
        'criticidad' => Criticidad::class,
    ];

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }
}
