<?php

namespace Database\Seeders;

use App\Models\Soporte;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Soporte::create([
            'nombre_soporte' => 'Cadena de Suministro',
            'descripcion' => 'Asegura que los restaurantes tengan los insumos necesarios (pollo, aceite, empaques) disponibles cuando se necesitan.',
        ]);

        Soporte::create([
            'nombre_soporte' => 'Aseguramiento de Calidad',
            'descripcion' => 'Auditorías, monitoreo y estandarización para asegurar que los productos cumplan con los estándares de la marca y regulaciones sanitarias.',
        ]);

        Soporte::create([
            'nombre_soporte' => 'Resolución de Incidentes y Soporte IT',
            'descripcion' => 'Servicio interno para restaurar la operación normal lo más rápido posible cuando algo falla (ej. se cae el sistema de cajas, falla la freidora conectada, error en la app).',
        ]);
    }
}
