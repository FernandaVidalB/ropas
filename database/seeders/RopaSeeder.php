<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RopaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ropas')->insert([
            [
                'name' => 'Camiseta Básica',
                'description' => 'Camiseta de algodón 100% color blanco',
                'price' => 199.99,
                'stock' => 50,
                'size' => 'M',
                'color' => 'Blanco',
                'brand' => 'Zara',
                'gender' => 'Unisex',
                'release_date' => '2025-01-10',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pantalón Jeans',
                'description' => 'Jeans azul corte recto',
                'price' => 499.50,
                'stock' => 30,
                'size' => '32',
                'color' => 'Azul',
                'brand' => 'Levi’s',
                'gender' => 'Hombre',
                'release_date' => '2025-02-05',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vestido Floral',
                'description' => 'Vestido con estampado de flores, tela ligera',
                'price' => 699.00,
                'stock' => 20,
                'size' => 'L',
                'color' => 'Rojo',
                'brand' => 'H&M',
                'gender' => 'Mujer',
                'release_date' => '2025-03-01',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sudadera Hoodie',
                'description' => 'Sudadera con capucha, interior afelpado',
                'price' => 399.90,
                'stock' => 40,
                'size' => 'XL',
                'color' => 'Negro',
                'brand' => 'Nike',
                'gender' => 'Unisex',
                'release_date' => '2025-04-15',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chaqueta de Cuero',
                'description' => 'Chaqueta estilo biker en cuero sintético',
                'price' => 1299.99,
                'stock' => 10,
                'size' => 'M',
                'color' => 'Negro',
                'brand' => 'Pull&Bear',
                'gender' => 'Hombre',
                'release_date' => '2025-05-20',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
