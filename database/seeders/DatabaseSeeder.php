<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Clientes;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([

            // Seeder para Departamentos, distritos, usuarios y clientes.
            DepartamentosSeeder::class,
            DistritosSeeder::class,
            ClientSeeder::class,
            UserSeeder::class
        ]);

    }
}
