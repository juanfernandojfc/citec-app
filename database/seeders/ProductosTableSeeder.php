<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            'nombre' => 'Producto prueba A',
            'descripcion' => 'Descripción del Producto A',
            'precio' => 10.00,
            'stock' => 100,
        ]);

        Producto::create([
            'nombre' => 'Producto prueb B',
            'descripcion' => 'Descripción del Producto B',
            'precio' => 20.00,
            'stock' => 50,
        ]);

        Producto::create([
            'nombre' => 'Producto prueb C',
            'descripcion' => 'Descripción del Producto C',
            'precio' => 30.00,
            'stock' => 75,
        ]);
    }
}
