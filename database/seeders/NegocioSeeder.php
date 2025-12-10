<?php

namespace Database\Seeders;

use App\Models\Negocio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NegocioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Negocio::create([
            'nombre_negocio' => 'Gestión de Pedidos',
            'descripcion' => 'Habilita la captura, procesamiento y entrega de alimentos a los clientes a través de múltiples canales (mostrador, kiosco, app, delivery).',
        ]);

        Negocio::create([
            'nombre_negocio' => 'Atención al Cliente',
            'descripcion' => 'Canal oficial para gestionar la retroalimentación, reclamaciones y sugerencias de los consumidores finales para mejorar su experiencia (CX).',
        ]);
    }
}
