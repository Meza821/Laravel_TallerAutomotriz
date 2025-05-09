<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departamentos')->insert([
            ['codigo' => '00', 'nombre' => 'Otros', 'created_at' => now(), 'updated_at' => now()],
            ['codigo' => '01', 'nombre' => 'Ahuachapán', 'created_at' => now(), 'updated_at' => now()],
            ['codigo' => '02', 'nombre' => 'Santa Ana', 'created_at' => now(), 'updated_at' => now()],
            ['codigo' => '03', 'nombre' => 'Sonsonate', 'created_at' => now(), 'updated_at' => now()],
            ['codigo' => '04', 'nombre' => 'Chalatenango', 'created_at' => now(), 'updated_at' => now()],
            ['codigo' => '05', 'nombre' => 'La Libertad', 'created_at' => now(), 'updated_at' => now()],
            ['codigo' => '06', 'nombre' => 'San Salvador', 'created_at' => now(), 'updated_at' => now()],
            ['codigo' => '07', 'nombre' => 'Cuscatlán', 'created_at' => now(), 'updated_at' => now()],
            ['codigo' => '08', 'nombre' => 'La Paz', 'created_at' => now(), 'updated_at' => now()],
            ['codigo' => '09', 'nombre' => 'Cabañas', 'created_at' => now(), 'updated_at' => now()],
            ['codigo' => '10', 'nombre' => 'San Vicente', 'created_at' => now(), 'updated_at' => now()],
            ['codigo' => '11', 'nombre' => 'Usulután', 'created_at' => now(), 'updated_at' => now()],
            ['codigo' => '12', 'nombre' => 'San Miguel', 'created_at' => now(), 'updated_at' => now()],
            ['codigo' => '13', 'nombre' => 'Morazán', 'created_at' => now(), 'updated_at' => now()],
            ['codigo' => '14', 'nombre' => 'La Unión', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
