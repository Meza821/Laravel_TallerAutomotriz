<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Clientes;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       

        $Cliente = new Clientes();
        $Cliente->nombre = 'David Vasquez';
        $Cliente->tipo_persona = 'narutal';
        $Cliente->direccion = 'San Salvador';
        $Cliente->departamento = 'San Salvador';
        $Cliente->municipio = 'San Salvador';
        $Cliente->numero_registro = '0';
        $Cliente->dui = '056357798';
        $Cliente->nit = '06143011971843';
        $Cliente->giro = 'Venta de motocicletas';
        $Cliente->telefono = '78543210';
        $Cliente->email = 'david@gmai.com';
        $Cliente->created_at = now();
        $Cliente->updated_at = now();
        $Cliente->save();
    }
}
