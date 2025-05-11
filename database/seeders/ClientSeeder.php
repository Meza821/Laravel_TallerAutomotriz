<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Seeder para crear algunos clientes de prueba
        DB::table('clientes') ->insert([
            
                'nombre' => 'Jose David Rosales Velasquez',
                'tipo_persona' => 'natural',
                'direccion' => 'San Salvador',
                'departamento' => '06',
                'municipio' => '23',
                'numero_registro' => '0',
                'nit' => '06143011971843',
                'dui' => '056357798',
                'giro' => 'Venta de motocicletas',
                'telefono' => '78543210',
                'email' => 'david@gmail.com',
                'created_at' => now(),
                'updated_at' => now() 
        ]);
    }
}
