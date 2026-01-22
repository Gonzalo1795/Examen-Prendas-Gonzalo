<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prenda; 

class PrendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Prenda::create([
            'nombre' => 'Camiseta Básica',
            'descripcion' => 'Camiseta de algodón 100% color blanco',
            'precio' => 14.95
        ]);

        Prenda::create([
            'nombre' => 'Pantalón Vaquero',
            'descripcion' => 'Pantalón denim azul corte recto',
            'precio' => 39.99
        ]);

        Prenda::create([
            'nombre' => 'Chaqueta Impermeable',
            'descripcion' => 'Chaqueta ligera ideal para la lluvia',
            'precio' => 55.00
        ]);
    }
}
