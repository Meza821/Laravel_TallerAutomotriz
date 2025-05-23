<?php

namespace Database\Seeders;

use App\Models\Distrito;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistritosSeeder extends Seeder
{
       public function run(): void
    {
        DB::table('distritos')->insert([
            /*
            ******************************************************************************************************
            *  AHUACHAPAN NORTE, AHUACHAPAN CENTRO, AHUACHAPAN SUR - TODOS COMPARTEN EL MISMO COD DEPARTAMENTO
             *****************************************************************************************************
            */
            // AHUCHAPAN NORTE - CODIGO MUNICIPIO 13
            [
                'nombre_distrito' => 'Atiquizaya',
                'codigo_municipio' => '13',
                'nombre_municipio_oficial' => 'Ahuachapán Norte',
                'cod_departamento' => '01',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'El Refugio',
                'codigo_municipio' => '13',
                'nombre_municipio_oficial' => 'Ahuachapán Norte',
                'cod_departamento' => '01',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Lorenzo',
                'codigo_municipio' => '13',
                'nombre_municipio_oficial' => 'Ahuachapán Norte',
                'cod_departamento' => '01',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Turín',
                'codigo_municipio' => '13',
                'nombre_municipio_oficial' => 'Ahuachapán Norte',
                'cod_departamento' => '01',
                'created_at' => now(),
                'updated_at' => now()
            ],

            //AHUACHAPAN CENTRO - CODIGO MUNICIPIO 14
            [
                'nombre_distrito' => 'Ahuachapán',
                'codigo_municipio' => '14',
                'nombre_municipio_oficial' => 'Ahuachapán Centro',
                'cod_departamento' => '01',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Apaneca',
                'codigo_municipio' => '14',
                'nombre_municipio_oficial' => 'Ahuachapán Centro',
                'cod_departamento' => '01',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Concepción de Ataco',
                'codigo_municipio' => '14',
                'nombre_municipio_oficial' => 'Ahuachapán Centro',
                'cod_departamento' => '01',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'nombre_distrito' => 'Tacuba',
                'codigo_municipio' => '14',
                'nombre_municipio_oficial' => 'Ahuachapán Centro',
                'cod_departamento' => '01',
                'created_at' => now(),
                'updated_at' => now()
            ],
            //AHUACHAPAN SUR - CODIGO MUNICIPIO 15
            [
                'nombre_distrito' => 'Guaymango',
                'codigo_municipio' => '15',
                'nombre_municipio_oficial' => 'Ahuachapán Sur',
                'cod_departamento' => '01',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Jujutla',
                'codigo_municipio' => '15',
                'nombre_municipio_oficial' => 'Ahuachapán Sur',
                'cod_departamento' => '01',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Francisco Menéndez',
                'codigo_municipio' => '15',
                'nombre_municipio_oficial' => 'Ahuachapán Sur',
                'cod_departamento' => '01',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Pedro Puxtla',
                'codigo_municipio' => '15',
                'nombre_municipio_oficial' => 'Ahuachapán Sur',
                'cod_departamento' => '01',
                'created_at' => now(),
                'updated_at' => now()
            ],
            /*
            ******************************************************************************************************
            *  SANTA ANA NORTE, SANTA ANA CENTRO, SANTA ANA ESTE, SANTA ANA OESTE - TODOS COMPARTEN EL MISMO COD DEPARTAMENTO
             *****************************************************************************************************
            */
            // SANTA ANA NORTE - CODIGO MUNICIPIO 14
            [
                'nombre_distrito' => 'Masahuat',
                'codigo_municipio' => '14',
                'nombre_municipio_oficial' => 'Santa Ana Norte',
                'cod_departamento' => '02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Metapán',
                'codigo_municipio' => '14',
                'nombre_municipio_oficial' => 'Santa Ana Norte',
                'cod_departamento' => '02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Santa Rosa Guachipilín',
                'codigo_municipio' => '14',
                'nombre_municipio_oficial' => 'Santa Ana Norte',
                'cod_departamento' => '02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Texistepeque',
                'codigo_municipio' => '14',
                'nombre_municipio_oficial' => 'Santa Ana Norte',
                'cod_departamento' => '02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // SANTA ANA CENTRO - CODIGO MUNICIPIO 15
            [
                'nombre_distrito' => 'Santa Ana',
                'codigo_municipio' => '15',
                'nombre_municipio_oficial' => 'Santa Ana Centro',
                'cod_departamento' => '02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // SANTA ANA ESTE - CODIGO MUNICIPIO 16
            [
                'nombre_distrito' => 'Coatepeque',
                'codigo_municipio' => '16',
                'nombre_municipio_oficial' => 'Santa Ana Este',
                'cod_departamento' => '02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'El Congo',
                'codigo_municipio' => '16',
                'nombre_municipio_oficial' => 'Santa Ana Este',
                'cod_departamento' => '02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // SANTA ANA ESTE - CODIGO MUNICIPIO 17
            [
                'nombre_distrito' => 'Candelaria de la Frontera',
                'codigo_municipio' => '17',
                'nombre_municipio_oficial' => 'Santa Ana Oeste',
                'cod_departamento' => '02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Chalchuapa',
                'codigo_municipio' => '17',
                'nombre_municipio_oficial' => 'Santa Ana Oeste',
                'cod_departamento' => '02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'El Porvenir',
                'codigo_municipio' => '17',
                'nombre_municipio_oficial' => 'Santa Ana Oeste',
                'cod_departamento' => '02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'San Antonio Pajonal',
                'codigo_municipio' => '17',
                'nombre_municipio_oficial' => 'Santa Ana Oeste',
                'cod_departamento' => '02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'San Sebastián Salitrillo',
                'codigo_municipio' => '17',
                'nombre_municipio_oficial' => 'Santa Ana Oeste',
                'cod_departamento' => '02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Santiago de la Frontera',
                'codigo_municipio' => '17',
                'nombre_municipio_oficial' => 'Santa Ana Oeste',
                'cod_departamento' => '02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            /*
            ******************************************************************************************************
            *  SONSONATE NORTE, SONSONATE CENTRO, SONSONATE ESTE, SONSONATE OESTE - TODOS COMPARTEN EL MISMO COD DEPARTAMENTO
             *****************************************************************************************************
            */
            // SONSONATE NORTE - CODIGO MUNICIPIO 17
            [
                'nombre_distrito' => 'Juayúa',
                'codigo_municipio' => '17',
                'nombre_municipio_oficial' => 'Sonsonate Norte',
                'cod_departamento' => '03',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Nahuizalco',
                'codigo_municipio' => '17',
                'nombre_municipio_oficial' => 'Sonsonate Norte',
                'cod_departamento' => '03',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Salcoatitán',
                'codigo_municipio' => '17',
                'nombre_municipio_oficial' => 'Sonsonate Norte',
                'cod_departamento' => '03',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Santa Catarina Masahuat',
                'codigo_municipio' => '17',
                'nombre_municipio_oficial' => 'Sonsonate Norte',
                'cod_departamento' => '03',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // SONSONATE CENTRO - CODIGO MUNICIPIO 18
            [
                'nombre_distrito' => 'Sonsonate',
                'codigo_municipio' => '18',
                'nombre_municipio_oficial' => 'Sonsonate Centro',
                'cod_departamento' => '03',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Sonzacate',
                'codigo_municipio' => '18',
                'nombre_municipio_oficial' => 'Sonsonate Centro',
                'cod_departamento' => '03',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Nahulingo',
                'codigo_municipio' => '18',
                'nombre_municipio_oficial' => 'Sonsonate Centro',
                'cod_departamento' => '03',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Antonio del Monte',
                'codigo_municipio' => '18',
                'nombre_municipio_oficial' => 'Sonsonate Centro',
                'cod_departamento' => '03',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'nombre_distrito' => 'Santo Domingo de Guzmán',
                'codigo_municipio' => '18',
                'nombre_municipio_oficial' => 'Sonsonate Centro',
                'cod_departamento' => '03',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // SONSONATE ESTE - CODIGO MUNICIPIO 19
            [
                'nombre_distrito' => 'Izalco',
                'codigo_municipio' => '19',
                'nombre_municipio_oficial' => 'Sonsonate Este',
                'cod_departamento' => '03',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Armenia',
                'codigo_municipio' => '19',
                'nombre_municipio_oficial' => 'Sonsonate Este',
                'cod_departamento' => '03',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Caluco',
                'codigo_municipio' => '19',
                'nombre_municipio_oficial' => 'Sonsonate Este',
                'cod_departamento' => '03',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Julián',
                'codigo_municipio' => '19',
                'nombre_municipio_oficial' => 'Sonsonate Este',
                'cod_departamento' => '03',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Cuisnahuat',
                'codigo_municipio' => '19',
                'nombre_municipio_oficial' => 'Sonsonate Este',
                'cod_departamento' => '03',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Santa Isabel Ishuatán',
                'codigo_municipio' => '19',
                'nombre_municipio_oficial' => 'Sonsonate Este',
                'cod_departamento' => '03',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // SONSONATE OESTE - CODIGO MUNICIPIO 20
            [
                'nombre_distrito' => 'Acajutla',
                'codigo_municipio' => '20',
                'nombre_municipio_oficial' => 'Sonsonate Oeste',
                'cod_departamento' => '03',
                'created_at' => now(),
                'updated_at' => now()
            ],
            /*
            ******************************************************************************************************
            *  CHALATENANGO NORTE, CHALATENANGO CENTRO, CHALATENANGO SUR - TODOS COMPARTEN EL MISMO COD DEPARTAMENTO
             *****************************************************************************************************
            */
            // CHALATENANGO NORTE - CODIGO MUNICIPIO 34
            [
                'nombre_distrito' => 'La Palma',
                'codigo_municipio' => '34',
                'nombre_municipio_oficial' => 'Chalatenango Norte',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Citalá',
                'codigo_municipio' => '34',
                'nombre_municipio_oficial' => 'Chalatenango Norte',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Ignacio',
                'codigo_municipio' => '34',
                'nombre_municipio_oficial' => 'Chalatenango Norte',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // CHALATENANGO CENTRO - CODIGO MUNICIPIO 35
            [
                'nombre_distrito' => 'Nueva Concepción',
                'codigo_municipio' => '35',
                'nombre_municipio_oficial' => 'Chalatenango Centro',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Tejutla',
                'codigo_municipio' => '35',
                'nombre_municipio_oficial' => 'Chalatenango Centro',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'La Reina',
                'codigo_municipio' => '35',
                'nombre_municipio_oficial' => 'Chalatenango Centro',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Agua Caliente',
                'codigo_municipio' => '35',
                'nombre_municipio_oficial' => 'Chalatenango Centro',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Dulce Nombre de María',
                'codigo_municipio' => '35',
                'nombre_municipio_oficial' => 'Chalatenango Centro',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'El Paraiso',
                'codigo_municipio' => '35',
                'nombre_municipio_oficial' => 'Chalatenango Centro',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Francisco Morazán',
                'codigo_municipio' => '35',
                'nombre_municipio_oficial' => 'Chalatenango Centro',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Rafael',
                'codigo_municipio' => '35',
                'nombre_municipio_oficial' => 'Chalatenango Centro',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Santa Rita',
                'codigo_municipio' => '35',
                'nombre_municipio_oficial' => 'Chalatenango Centro',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Fernando',
                'codigo_municipio' => '35',
                'nombre_municipio_oficial' => 'Chalatenango Centro',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // CHALATENANGO CENTRO - CODIGO MUNICIPIO 36
            [
                'nombre_distrito' => 'Chalatenango',
                'codigo_municipio' => '36',
                'nombre_municipio_oficial' => 'Chalatenango Sur',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Arcatao',
                'codigo_municipio' => '36',
                'nombre_municipio_oficial' => 'Chalatenango Sur',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Azacualpa',
                'codigo_municipio' => '36',
                'nombre_municipio_oficial' => 'Chalatenango Sur',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Comalapa',
                'codigo_municipio' => '36',
                'nombre_municipio_oficial' => 'Chalatenango Sur',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Concepción Quezaltepeque',
                'codigo_municipio' => '36',
                'nombre_municipio_oficial' => 'Chalatenango Sur',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'El Carrizal',
                'codigo_municipio' => '36',
                'nombre_municipio_oficial' => 'Chalatenango Sur',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'La Laguna',
                'codigo_municipio' => '36',
                'nombre_municipio_oficial' => 'Chalatenango Sur',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Las Vueltas',
                'codigo_municipio' => '36',
                'nombre_municipio_oficial' => 'Chalatenango Sur',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Nombre de Jesús',
                'codigo_municipio' => '36',
                'nombre_municipio_oficial' => 'Chalatenango Sur',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Nueva Trinidad',
                'codigo_municipio' => '36',
                'nombre_municipio_oficial' => 'Chalatenango Sur',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Ojos de Agua',
                'codigo_municipio' => '36',
                'nombre_municipio_oficial' => 'Chalatenango Sur',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Potonico',
                'codigo_municipio' => '36',
                'nombre_municipio_oficial' => 'Chalatenango Sur',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Antonio de la Cruz',
                'codigo_municipio' => '36',
                'nombre_municipio_oficial' => 'Chalatenango Sur',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Antonio Los Ranchos',
                'codigo_municipio' => '36',
                'nombre_municipio_oficial' => 'Chalatenango Sur',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Francisco Lempa',
                'codigo_municipio' => '36',
                'nombre_municipio_oficial' => 'Chalatenango Sur',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Isidro Labrador',
                'codigo_municipio' => '36',
                'nombre_municipio_oficial' => 'Chalatenango Sur',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San José Cancasque',
                'codigo_municipio' => '36',
                'nombre_municipio_oficial' => 'Chalatenango Sur',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Miguel de Mercedes',
                'codigo_municipio' => '36',
                'nombre_municipio_oficial' => 'Chalatenango Sur',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San José Las Flores',
                'codigo_municipio' => '36',
                'nombre_municipio_oficial' => 'Chalatenango Sur',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Luis del Carmen',
                'codigo_municipio' => '36',
                'nombre_municipio_oficial' => 'Chalatenango Sur',
                'cod_departamento' => '04',
                'created_at' => now(),
                'updated_at' => now()
            ],
            /*
            ******************************************************************************************************
            *  LA LIBERTAD NORTE, LA LIBERTAD CENTRO, LA LIBERTAD OESTE, LA LIBERTAD COSTA, LA LIBERTAD SUR - TODOS COMPARTEN EL MISMO COD DEPARTAMENTO
             *****************************************************************************************************
            */
            // LA LIBERTAD NORTE - CODIGO MUNICIPIO 23
            [
                'nombre_distrito' => 'Quezaltepeque',
                'codigo_municipio' => '23',
                'nombre_municipio_oficial' => 'La Libertad Norte',
                'cod_departamento' => '05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'San Matías',
                'codigo_municipio' => '23',
                'nombre_municipio_oficial' => 'La Libertad Norte',
                'cod_departamento' => '05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'San Pablo Tacachico',
                'codigo_municipio' => '23',
                'nombre_municipio_oficial' => 'La Libertad Norte',
                'cod_departamento' => '05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // LA LIBERTAD CENTRO - CODIGO MUNICIPIO 24
            [
                'nombre_distrito' => 'San Juan Opico',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'La Libertad Centro',
                'cod_departamento' => '05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Ciudad Arce',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'La Libertad Centro',
                'cod_departamento' => '05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // LA LIBERTAD OESTE - CODIGO MUNICIPIO 25
            [
                'nombre_distrito' => 'Colón',
                'codigo_municipio' => '25',
                'nombre_municipio_oficial' => 'La Libertad Oeste',
                'cod_departamento' => '05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Jayaque',
                'codigo_municipio' => '25',
                'nombre_municipio_oficial' => 'La Libertad Oeste',
                'cod_departamento' => '05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Sacacoyo',
                'codigo_municipio' => '25',
                'nombre_municipio_oficial' => 'La Libertad Oeste',
                'cod_departamento' => '05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Tepecoyo',
                'codigo_municipio' => '25',
                'nombre_municipio_oficial' => 'La Libertad Oeste',
                'cod_departamento' => '05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Talnique',
                'codigo_municipio' => '25',
                'nombre_municipio_oficial' => 'La Libertad Oeste',
                'cod_departamento' => '05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // LA LIBERTAD ESTE - CODIGO MUNICIPIO 26
            [
                'nombre_distrito' => 'Antiguo Cuscatlán',
                'codigo_municipio' => '26',
                'nombre_municipio_oficial' => 'La Libertad Este',
                'cod_departamento' => '05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Huizúcar',
                'codigo_municipio' => '26',
                'nombre_municipio_oficial' => 'La Libertad Este',
                'cod_departamento' => '05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Nuevo Cuscatlán',
                'codigo_municipio' => '26',
                'nombre_municipio_oficial' => 'La Libertad Este',
                'cod_departamento' => '05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'San José Villanueva',
                'codigo_municipio' => '26',
                'nombre_municipio_oficial' => 'La Libertad Este',
                'cod_departamento' => '05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Zaragoza',
                'codigo_municipio' => '26',
                'nombre_municipio_oficial' => 'La Libertad Este',
                'cod_departamento' => '05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // LA LIBERTAD COSTA - CODIGO MUNICIPIO 27
            [
                'nombre_distrito' => 'Chiltiupán',
                'codigo_municipio' => '27',
                'nombre_municipio_oficial' => 'La Libertad Costa',
                'cod_departamento' => '05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Jicalapa',
                'codigo_municipio' => '27',
                'nombre_municipio_oficial' => 'La Libertad Costa',
                'cod_departamento' => '05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'La Libertad',
                'codigo_municipio' => '27',
                'nombre_municipio_oficial' => 'La Libertad Costa',
                'cod_departamento' => '05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Tamanique',
                'codigo_municipio' => '27',
                'nombre_municipio_oficial' => 'La Libertad Costa',
                'cod_departamento' => '05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Teotepeque',
                'codigo_municipio' => '27',
                'nombre_municipio_oficial' => 'La Libertad Costa',
                'cod_departamento' => '05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // LA LIBERTAD COSTA - CODIGO MUNICIPIO 28
            [
                'nombre_distrito' => 'Comasagua',
                'codigo_municipio' => '28',
                'nombre_municipio_oficial' => 'La Libertad Sur',
                'cod_departamento' => '05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Santa Tecla',
                'codigo_municipio' => '28',
                'nombre_municipio_oficial' => 'La Libertad Sur',
                'cod_departamento' => '05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            /*
            ******************************************************************************************************
            *  SAN SALVADOR NORTE, SAN SALVADOR OESTE, SAN SALVADOR ESTE, SAN SALVADOR CENTRO, SAN SALVADOR SUR - TODOS COMPARTEN EL MISMO COD DEPARTAMENTO
             *****************************************************************************************************
            */
            // SAN SALVADOR NORTE - CODIGO MUNICIPIO 20
            [
                'nombre_distrito' => 'Aguilares',
                'codigo_municipio' => '20',
                'nombre_municipio_oficial' => 'San Salvador Norte',
                'cod_departamento' => '06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'El Paisnal',
                'codigo_municipio' => '20',
                'nombre_municipio_oficial' => 'San Salvador Norte',
                'cod_departamento' => '06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Guazapa',
                'codigo_municipio' => '20',
                'nombre_municipio_oficial' => 'San Salvador Norte',
                'cod_departamento' => '06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // SAN SALVADOR OESTE - CODIGO MUNICIPIO 21
            [
                'nombre_distrito' => 'Apopa',
                'codigo_municipio' => '21',
                'nombre_municipio_oficial' => 'San Salvador Oeste',
                'cod_departamento' => '06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Nejapa',
                'codigo_municipio' => '21',
                'nombre_municipio_oficial' => 'San Salvador Oeste',
                'cod_departamento' => '06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // SAN SALVADOR ESTE - CODIGO MUNICIPIO 22
            [
                'nombre_distrito' => 'Ilopango',
                'codigo_municipio' => '22',
                'nombre_municipio_oficial' => 'San Salvador Este',
                'cod_departamento' => '06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'San Martín',
                'codigo_municipio' => '22',
                'nombre_municipio_oficial' => 'San Salvador Este',
                'cod_departamento' => '06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Soyapango',
                'codigo_municipio' => '22',
                'nombre_municipio_oficial' => 'San Salvador Este',
                'cod_departamento' => '06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Tonacatepeque',
                'codigo_municipio' => '22',
                'nombre_municipio_oficial' => 'San Salvador Este',
                'cod_departamento' => '06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // SAN SALVADOR CENTRO - CODIGO MUNICIPIO 23
            [
                'nombre_distrito' => 'Ayutuxtepeque',
                'codigo_municipio' => '23',
                'nombre_municipio_oficial' => 'San Salvador Centro',
                'cod_departamento' => '06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Mejicanos',
                'codigo_municipio' => '23',
                'nombre_municipio_oficial' => 'San Salvador Centro',
                'cod_departamento' => '06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'San Salvador',
                'codigo_municipio' => '23',
                'nombre_municipio_oficial' => 'San Salvador Centro',
                'cod_departamento' => '06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Cuscatancingo',
                'codigo_municipio' => '23',
                'nombre_municipio_oficial' => 'San Salvador Centro',
                'cod_departamento' => '06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Ciudad Delgado',
                'codigo_municipio' => '23',
                'nombre_municipio_oficial' => 'San Salvador Centro',
                'cod_departamento' => '06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // SAN SALVADOR CENTRO - CODIGO MUNICIPIO 24
            [
                'nombre_distrito' => 'Panchimalco',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'San Salvador Sur',
                'cod_departamento' => '06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Rosario de Mora',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'San Salvador Sur',
                'cod_departamento' => '06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'San Marcos',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'San Salvador Sur',
                'cod_departamento' => '06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Santo Tomás',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'San Salvador Sur',
                'cod_departamento' => '06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Santiago Texacuangos',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'San Salvador Sur',
                'cod_departamento' => '06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            /*
            ******************************************************************************************************
            *  CUZCATLAN NORTE, CUZCATLAN SUR - TODOS COMPARTEN EL MISMO COD DEPARTAMENTO
             *****************************************************************************************************
            */
            // CUZCATLAN NORTE - CODIGO MUNICIPIO 17
            [
                'nombre_distrito' => 'Suchitoto',
                'codigo_municipio' => '17',
                'nombre_municipio_oficial' => 'Cuscatlán Norte',
                'cod_departamento' => '07',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'San José Guayabal',
                'codigo_municipio' => '17',
                'nombre_municipio_oficial' => 'Cuscatlán Norte',
                'cod_departamento' => '07',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Oratorio de Concepción',
                'codigo_municipio' => '17',
                'nombre_municipio_oficial' => 'Cuscatlán Norte',
                'cod_departamento' => '07',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'San Bartolomé Perulapán',
                'codigo_municipio' => '17',
                'nombre_municipio_oficial' => 'Cuscatlán Norte',
                'cod_departamento' => '07',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'San Pedro Perulapán',
                'codigo_municipio' => '17',
                'nombre_municipio_oficial' => 'Cuscatlán Norte',
                'cod_departamento' => '07',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // CUZCATLAN SUR - CODIGO MUNICIPIO 18
            [
                'nombre_distrito' => 'Cojutepeque',
                'codigo_municipio' => '18',
                'nombre_municipio_oficial' => 'Cuscatlán Sur',
                'cod_departamento' => '07',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'San Rafael Cedros',
                'codigo_municipio' => '18',
                'nombre_municipio_oficial' => 'Cuscatlán Sur',
                'cod_departamento' => '07',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Candelaria',
                'codigo_municipio' => '18',
                'nombre_municipio_oficial' => 'Cuscatlán Sur',
                'cod_departamento' => '07',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Monte San Juan',
                'codigo_municipio' => '18',
                'nombre_municipio_oficial' => 'Cuscatlán Sur',
                'cod_departamento' => '07',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'El Carmen',
                'codigo_municipio' => '18',
                'nombre_municipio_oficial' => 'Cuscatlán Sur',
                'cod_departamento' => '07',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'San Cristóbal',
                'codigo_municipio' => '18',
                'nombre_municipio_oficial' => 'Cuscatlán Sur',
                'cod_departamento' => '07',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Santa Cruz Michapa',
                'codigo_municipio' => '18',
                'nombre_municipio_oficial' => 'Cuscatlán Sur',
                'cod_departamento' => '07',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'San Ramón',
                'codigo_municipio' => '18',
                'nombre_municipio_oficial' => 'Cuscatlán Sur',
                'cod_departamento' => '07',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'El Rosario',
                'codigo_municipio' => '18',
                'nombre_municipio_oficial' => 'Cuscatlán Sur',
                'cod_departamento' => '07',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Santa Cruz Analquito',
                'codigo_municipio' => '18',
                'nombre_municipio_oficial' => 'Cuscatlán Sur',
                'cod_departamento' => '07',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_distrito' => 'Tenancingo',
                'codigo_municipio' => '18',
                'nombre_municipio_oficial' => 'Cuscatlán Sur',
                'cod_departamento' => '07',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            /*
            ******************************************************************************************************
            *  LA PAZ OESTE, LA PAZ CENTRO, LA PAZ ESTE - TODOS COMPARTEN EL MISMO COD DEPARTAMENTO
             *****************************************************************************************************
            */
            // LA PAZ OESTE - CODIGO MUNICIPIO 23
            [
                'nombre_distrito' => 'Cuyultitán',
                'codigo_municipio' => '23',
                'nombre_municipio_oficial' => 'La Paz Oeste',
                'cod_departamento' => '08',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Olocuilta',
                'codigo_municipio' => '23',
                'nombre_municipio_oficial' => 'La Paz Oeste',
                'cod_departamento' => '08',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Juan Talpa',
                'codigo_municipio' => '23',
                'nombre_municipio_oficial' => 'La Paz Oeste',
                'cod_departamento' => '08',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Luis Talpa',
                'codigo_municipio' => '23',
                'nombre_municipio_oficial' => 'La Paz Oeste',
                'cod_departamento' => '08',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Pedro Masahuat',
                'codigo_municipio' => '23',
                'nombre_municipio_oficial' => 'La Paz Oeste',
                'cod_departamento' => '08',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Tapalhuaca',
                'codigo_municipio' => '23',
                'nombre_municipio_oficial' => 'La Paz Oeste',
                'cod_departamento' => '08',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Francisco Chinameca',
                'codigo_municipio' => '23',
                'nombre_municipio_oficial' => 'La Paz Oeste',
                'cod_departamento' => '08',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // LA PAZ CENTRO - CODIGO MUNICIPIO 24
            [
                'nombre_distrito' => 'El Rosario',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'La Paz Centro',
                'cod_departamento' => '08',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Jerusalén',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'La Paz Centro',
                'cod_departamento' => '08',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Mercedes La Ceiba',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'La Paz Centro',
                'cod_departamento' => '08',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Paraíso de Osorio',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'La Paz Centro',
                'cod_departamento' => '08',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Antonio Masahuat',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'La Paz Centro',
                'cod_departamento' => '08',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Emigdio',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'La Paz Centro',
                'cod_departamento' => '08',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Juan Tepezontes',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'La Paz Centro',
                'cod_departamento' => '08',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Luis La Herradura',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'La Paz Centro',
                'cod_departamento' => '08',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Miguel Tepezontes',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'La Paz Centro',
                'cod_departamento' => '08',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Pedro Nonualco',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'La Paz Centro',
                'cod_departamento' => '08',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Santa María Ostuma',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'La Paz Centro',
                'cod_departamento' => '08',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Santiago Nonualco',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'La Paz Centro',
                'cod_departamento' => '08',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // LA PAZ ESTE - CODIGO MUNICIPIO 25
            [
                'nombre_distrito' => 'San Juan Nonualco',
                'codigo_municipio' => '25',
                'nombre_municipio_oficial' => 'La Paz Este',
                'cod_departamento' => '08',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Rafael Obrajuelo',
                'codigo_municipio' => '25',
                'nombre_municipio_oficial' => 'La Paz Este',
                'cod_departamento' => '08',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Zacatecoluca',
                'codigo_municipio' => '25',
                'nombre_municipio_oficial' => 'La Paz Este',
                'cod_departamento' => '08',
                'created_at' => now(),
                'updated_at' => now()
            ],
            /*
            ******************************************************************************************************
            *  CABAÑAS OESTE, CABAÑAS ESTE - TODOS COMPARTEN EL MISMO COD DEPARTAMENTO
             *****************************************************************************************************
            */
            // CABAÑAS OESTE - CODIGO MUNICIPIO 10
            [
                'nombre_distrito' => 'Ilobasco',
                'codigo_municipio' => '10',
                'nombre_municipio_oficial' => 'Cabañas Oeste',
                'cod_departamento' => '09',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Tejutepeque',
                'codigo_municipio' => '10',
                'nombre_municipio_oficial' => 'Cabañas Oeste',
                'cod_departamento' => '09',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Jutiapa',
                'codigo_municipio' => '10',
                'nombre_municipio_oficial' => 'Cabañas Oeste',
                'cod_departamento' => '09',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Cinquera',
                'codigo_municipio' => '10',
                'nombre_municipio_oficial' => 'Cabañas Este',
                'cod_departamento' => '09',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // CABAÑAS ESTE - CODIGO MUNICIPIO 11
            [
                'nombre_distrito' => 'Sensuntepeque',
                'codigo_municipio' => '11',
                'nombre_municipio_oficial' => 'Cabañas Este',
                'cod_departamento' => '09',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Victoria',
                'codigo_municipio' => '11',
                'nombre_municipio_oficial' => 'Cabañas Este',
                'cod_departamento' => '09',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Dolores',
                'codigo_municipio' => '11',
                'nombre_municipio_oficial' => 'Cabañas Este',
                'cod_departamento' => '09',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Guacotecti',
                'codigo_municipio' => '11',
                'nombre_municipio_oficial' => 'Cabañas Este',
                'cod_departamento' => '09',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Isidro',
                'codigo_municipio' => '11',
                'nombre_municipio_oficial' => 'Cabañas Este',
                'cod_departamento' => '09',
                'created_at' => now(),
                'updated_at' => now()
            ],
            /*
            ******************************************************************************************************
            *  SAN VICENTE NORTE, SAN VICENTE SUR - TODOS COMPARTEN EL MISMO COD DEPARTAMENTO
             *****************************************************************************************************
            */
            // SAN VICENTE NORTE - CODIGO MUNICIPIO 14
            [
                'nombre_distrito' => 'Apastepeque',
                'codigo_municipio' => '14',
                'nombre_municipio_oficial' => 'San Vicente Norte',
                'cod_departamento' => '10',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Santa Clara',
                'codigo_municipio' => '14',
                'nombre_municipio_oficial' => 'San Vicente Norte',
                'cod_departamento' => '10',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Ildefonso',
                'codigo_municipio' => '14',
                'nombre_municipio_oficial' => 'San Vicente Norte',
                'cod_departamento' => '10',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Esteban Catarina',
                'codigo_municipio' => '14',
                'nombre_municipio_oficial' => 'San Vicente Norte',
                'cod_departamento' => '10',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Sebastián',
                'codigo_municipio' => '14',
                'nombre_municipio_oficial' => 'San Vicente Norte',
                'cod_departamento' => '10',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Lorenzo',
                'codigo_municipio' => '14',
                'nombre_municipio_oficial' => 'San Vicente Norte',
                'cod_departamento' => '10',
                'created_at' => now(),
                'updated_at' => now()
            ],


            [
                'nombre_distrito' => 'Santo Domingo',
                'codigo_municipio' => '14',
                'nombre_municipio_oficial' => 'San Vicente Norte',
                'cod_departamento' => '10',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // SAN VICENTE SUR - CODIGO MUNICIPIO 15
            [
                'nombre_distrito' => 'San Vicente',
                'codigo_municipio' => '15',
                'nombre_municipio_oficial' => 'San Vicente Sur',
                'cod_departamento' => '10',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Guadalupe',
                'codigo_municipio' => '15',
                'nombre_municipio_oficial' => 'San Vicente Sur',
                'cod_departamento' => '10',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Verapaz',
                'codigo_municipio' => '15',
                'nombre_municipio_oficial' => 'San Vicente Sur',
                'cod_departamento' => '10',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Tepetitán',
                'codigo_municipio' => '15',
                'nombre_municipio_oficial' => 'San Vicente Sur',
                'cod_departamento' => '10',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Tecoluca',
                'codigo_municipio' => '15',
                'nombre_municipio_oficial' => 'San Vicente Sur',
                'cod_departamento' => '10',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Cayetano Istepeque',
                'codigo_municipio' => '15',
                'nombre_municipio_oficial' => 'San Vicente Sur',
                'cod_departamento' => '10',
                'created_at' => now(),
                'updated_at' => now()
            ],
            /*
            ******************************************************************************************************
            *  USULUTÁN NORTE, USULUTÁN ESTE, USULUTÁN OESTE - TODOS COMPARTEN EL MISMO COD DEPARTAMENTO
             *****************************************************************************************************
            */
            // USULUTÁN NORTE - CODIGO MUNICIPIO 24
            [
                'nombre_distrito' => 'Santiago de María',

                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'Usulután Norte',
                'cod_departamento' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Alegría',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'Usulután Norte',
                'cod_departamento' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Berlín',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'Usulután Norte',
                'cod_departamento' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Mercedes Umana',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'Usulután Norte',
                'cod_departamento' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Jucuapa',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'Usulután Norte',
                'cod_departamento' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'El Triunfo',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'Usulután Norte',
                'cod_departamento' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Estanzuelas',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'Usulután Norte',
                'cod_departamento' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Buenaventura',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'Usulután Norte',
                'cod_departamento' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Nueva Granada',
                'codigo_municipio' => '24',
                'nombre_municipio_oficial' => 'Usulután Norte',
                'cod_departamento' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // USULUTÁN ESTE - CODIGO MUNICIPIO 25
            [
                'nombre_distrito' => 'Usulután',
                'codigo_municipio' => '25',
                'nombre_municipio_oficial' => 'Usulután Este',
                'cod_departamento' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Jucuarán',
                'codigo_municipio' => '25',
                'nombre_municipio_oficial' => 'Usulután Este',
                'cod_departamento' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Dionisio',
                'codigo_municipio' => '25',
                'nombre_municipio_oficial' => 'Usulután Este',
                'cod_departamento' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Concepción Batres',
                'codigo_municipio' => '25',
                'nombre_municipio_oficial' => 'Usulután Este',
                'cod_departamento' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Santa María',
                'codigo_municipio' => '25',
                'nombre_municipio_oficial' => 'Usulután Este',
                'cod_departamento' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Ozatlán',
                'codigo_municipio' => '25',
                'nombre_municipio_oficial' => 'Usulután Este',
                'cod_departamento' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Tecapán',
                'codigo_municipio' => '25',
                'nombre_municipio_oficial' => 'Usulután Este',
                'cod_departamento' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Santa Elena',
                'codigo_municipio' => '25',
                'nombre_municipio_oficial' => 'Usulután Este',
                'cod_departamento' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'California',
                'codigo_municipio' => '25',
                'nombre_municipio_oficial' => 'Usulután Este',
                'cod_departamento' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Ereguayquín',
                'codigo_municipio' => '25',
                'nombre_municipio_oficial' => 'Usulután Este',
                'cod_departamento' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // USULUTÁN OESTE - CODIGO MUNICIPIO 26
            [
                'nombre_distrito' => 'Jiquilisco',
                'codigo_municipio' => '26',
                'nombre_municipio_oficial' => 'Usulután Oeste',
                'cod_departamento' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Puerto El Triunfo',
                'codigo_municipio' => '26',
                'nombre_municipio_oficial' => 'Usulután Oeste',
                'cod_departamento' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Agustín',
                'codigo_municipio' => '26',
                'nombre_municipio_oficial' => 'Usulután Oeste',
                'cod_departamento' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Francisco Javier',
                'codigo_municipio' => '26',
                'nombre_municipio_oficial' => 'Usulután Oeste',
                'cod_departamento' => '11',
                'created_at' => now(),
                'updated_at' => now()
            ],
            /*
            ******************************************************************************************************
            *  SAN MIGUEL NORTE, SAN MIGUEL CENTRO, SAN MIGUEL OESTE - TODOS COMPARTEN EL MISMO COD DEPARTAMENTO
             *****************************************************************************************************
            */
            // SAN MIGUEL NORTE - CODIGO MUNICIPIO 21
            [
                'nombre_distrito' => 'Ciudad Barrios',
                'codigo_municipio' => '21',
                'nombre_municipio_oficial' => 'San Miguel Norte',
                'cod_departamento' => '12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Sesori',
                'codigo_municipio' => '21',
                'nombre_municipio_oficial' => 'San Miguel Norte',
                'cod_departamento' => '12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Nuevo Edén de San Juan',
                'codigo_municipio' => '21',
                'nombre_municipio_oficial' => 'San Miguel Norte',
                'cod_departamento' => '12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Gerardo',
                'codigo_municipio' => '21',
                'nombre_municipio_oficial' => 'San Miguel Norte',
                'cod_departamento' => '12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Luis de la Reina',
                'codigo_municipio' => '21',
                'nombre_municipio_oficial' => 'San Miguel Norte',
                'cod_departamento' => '12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Carolina',
                'codigo_municipio' => '21',
                'nombre_municipio_oficial' => 'San Miguel Norte',
                'cod_departamento' => '12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San António del Mosco',
                'codigo_municipio' => '21',
                'nombre_municipio_oficial' => 'San Miguel Norte',
                'cod_departamento' => '12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Chapeltique',
                'codigo_municipio' => '21',
                'nombre_municipio_oficial' => 'San Miguel Norte',
                'cod_departamento' => '12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // SAN MIGUEL CENTRO - CODIGO MUNICIPIO 22
            [
                'nombre_distrito' => 'San Miguel',
                'codigo_municipio' => '22',
                'nombre_municipio_oficial' => 'San Miguel Centro',
                'cod_departamento' => '12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Comacarán',
                'codigo_municipio' => '22',
                'nombre_municipio_oficial' => 'San Miguel Centro',
                'cod_departamento' => '12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Uluazapa',
                'codigo_municipio' => '22',
                'nombre_municipio_oficial' => 'San Miguel Centro',
                'cod_departamento' => '12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Moncagua',
                'codigo_municipio' => '22',
                'nombre_municipio_oficial' => 'San Miguel Centro',
                'cod_departamento' => '12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Quelepa',
                'codigo_municipio' => '22',
                'nombre_municipio_oficial' => 'San Miguel Centro',
                'cod_departamento' => '12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Chirilagua',
                'codigo_municipio' => '22',
                'nombre_municipio_oficial' => 'San Miguel Centro',
                'cod_departamento' => '12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // SAN MIGUEL OESTE - CODIGO MUNICIPIO 23
            [
                'nombre_distrito' => 'Chinameca',
                'codigo_municipio' => '23',
                'nombre_municipio_oficial' => 'San Miguel Oeste',
                'cod_departamento' => '12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Nueva Guadalupe',
                'codigo_municipio' => '23',
                'nombre_municipio_oficial' => 'San Miguel Oeste',
                'cod_departamento' => '12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Lolotique',
                'codigo_municipio' => '23',
                'nombre_municipio_oficial' => 'San Miguel Oeste',
                'cod_departamento' => '12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Jorge',
                'codigo_municipio' => '23',
                'nombre_municipio_oficial' => 'San Miguel Oeste',
                'cod_departamento' => '12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Rafael Oriente',
                'codigo_municipio' => '23',
                'nombre_municipio_oficial' => 'San Miguel Oeste',
                'cod_departamento' => '12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'El Tránsito',
                'codigo_municipio' => '23',
                'nombre_municipio_oficial' => 'San Miguel Oeste',
                'cod_departamento' => '12',
                'created_at' => now(),
                'updated_at' => now()
            ],
            /*
            ******************************************************************************************************
            *  MORAZÁN NORTE, MORAZÁN SUR - TODOS COMPARTEN EL MISMO COD DEPARTAMENTO
             *****************************************************************************************************
            */
            // MORAZÁN NORTE - CODIGO MUNICIPIO 27
            [
                'nombre_distrito' => 'Arambala',
                'codigo_municipio' => '27',
                'nombre_municipio_oficial' => 'Morazán Norte',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Cacaopera',
                'codigo_municipio' => '27',
                'nombre_municipio_oficial' => 'Morazán Norte',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Corinto',
                'codigo_municipio' => '27',
                'nombre_municipio_oficial' => 'Morazán Norte',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'El Rosario',
                'codigo_municipio' => '27',
                'nombre_municipio_oficial' => 'Morazán Norte',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Joateca',
                'codigo_municipio' => '27',
                'nombre_municipio_oficial' => 'Morazán Norte',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Jocoaitique',
                'codigo_municipio' => '27',
                'nombre_municipio_oficial' => 'Morazán Norte',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Meanguera',
                'codigo_municipio' => '27',
                'nombre_municipio_oficial' => 'Morazán Norte',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Perquín',
                'codigo_municipio' => '27',
                'nombre_municipio_oficial' => 'Morazán Norte',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Fernando',
                'codigo_municipio' => '27',
                'nombre_municipio_oficial' => 'Morazán Norte',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Isidro',
                'codigo_municipio' => '27',
                'nombre_municipio_oficial' => 'Morazán Norte',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Torola',
                'codigo_municipio' => '27',
                'nombre_municipio_oficial' => 'Morazán Norte',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // MORAZÁN SUR - CODIGO MUNICIPIO 28
            [
                'nombre_distrito' => 'Chilanga',
                'codigo_municipio' => '28',
                'nombre_municipio_oficial' => 'Morazán Sur',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Delicias de Concepción',
                'codigo_municipio' => '28',
                'nombre_municipio_oficial' => 'Morazán Sur',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'El Divisadero',
                'codigo_municipio' => '28',
                'nombre_municipio_oficial' => 'Morazán Sur',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Gualococti',
                'codigo_municipio' => '28',
                'nombre_municipio_oficial' => 'Morazán Sur',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Guatajiagua',
                'codigo_municipio' => '28',
                'nombre_municipio_oficial' => 'Morazán Sur',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Jocoro',
                'codigo_municipio' => '28',
                'nombre_municipio_oficial' => 'Morazán Sur',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Lolotiquillo',
                'codigo_municipio' => '28',
                'nombre_municipio_oficial' => 'Morazán Sur',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Osicala',
                'codigo_municipio' => '28',
                'nombre_municipio_oficial' => 'Morazán Sur',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Carlos',
                'codigo_municipio' => '28',
                'nombre_municipio_oficial' => 'Morazán Sur',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Francisco Gotera',
                'codigo_municipio' => '28',
                'nombre_municipio_oficial' => 'Morazán Sur',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Simón',
                'codigo_municipio' => '28',
                'nombre_municipio_oficial' => 'Morazán Sur',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Sensembra',
                'codigo_municipio' => '28',
                'nombre_municipio_oficial' => 'Morazán Sur',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Sociedad',
                'codigo_municipio' => '28',
                'nombre_municipio_oficial' => 'Morazán Sur',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Yamabal',
                'codigo_municipio' => '28',
                'nombre_municipio_oficial' => 'Morazán Sur',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Yoloaiquín',
                'codigo_municipio' => '28',
                'nombre_municipio_oficial' => 'Morazán Sur',
                'cod_departamento' => '13',
                'created_at' => now(),
                'updated_at' => now()
            ],
            /*
            ******************************************************************************************************
            *  LA UNIÓN NORTE, LA UNIÓN SUR - TODOS COMPARTEN EL MISMO COD DEPARTAMENTO
             *****************************************************************************************************
            */
            // LA UNIÓN NORTE - CODIGO MUNICIPIO 19
            [
                'nombre_distrito' => 'Anamorós',
                'codigo_municipio' => '19',
                'nombre_municipio_oficial' => 'La Unión Norte',
                'cod_departamento' => '14',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Bolívar',
                'codigo_municipio' => '19',
                'nombre_municipio_oficial' => 'La Unión Norte',
                'cod_departamento' => '14',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Concepción de Oriente',
                'codigo_municipio' => '19',
                'nombre_municipio_oficial' => 'La Unión Norte',
                'cod_departamento' => '14',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'El Sauce',
                'codigo_municipio' => '19',
                'nombre_municipio_oficial' => 'La Unión Norte',
                'cod_departamento' => '14',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Lislique',
                'codigo_municipio' => '19',
                'nombre_municipio_oficial' => 'La Unión Norte',
                'cod_departamento' => '14',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Nueva Esparta',
                'codigo_municipio' => '19',
                'nombre_municipio_oficial' => 'La Unión Norte',
                'cod_departamento' => '14',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Pasaquina',
                'codigo_municipio' => '19',
                'nombre_municipio_oficial' => 'La Unión Norte',
                'cod_departamento' => '14',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Polorós',
                'codigo_municipio' => '19',
                'nombre_municipio_oficial' => 'La Unión Norte',
                'cod_departamento' => '14',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San José La Fuente',
                'codigo_municipio' => '19',
                'nombre_municipio_oficial' => 'La Unión Norte',
                'cod_departamento' => '14',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Santa Rosa de Lima',
                'codigo_municipio' => '19',
                'nombre_municipio_oficial' => 'La Unión Norte',
                'cod_departamento' => '14',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // LA UNIÓN SUR - CODIGO MUNICIPIO 20
            [
                'nombre_distrito' => 'Conchagua',
                'codigo_municipio' => '20',
                'nombre_municipio_oficial' => 'La Unión Sur',
                'cod_departamento' => '14',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'El Carmen',
                'codigo_municipio' => '20',
                'nombre_municipio_oficial' => 'La Unión Sur',
                'cod_departamento' => '14',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Intipucá',
                'codigo_municipio' => '20',
                'nombre_municipio_oficial' => 'La Unión Sur',
                'cod_departamento' => '14',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'La Unión',
                'codigo_municipio' => '20',
                'nombre_municipio_oficial' => 'La Unión Sur',
                'cod_departamento' => '14',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Meanguera del Golfo',
                'codigo_municipio' => '20',
                'nombre_municipio_oficial' => 'La Unión Sur',
                'cod_departamento' => '14',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'San Alejo',
                'codigo_municipio' => '20',
                'nombre_municipio_oficial' => 'La Unión Sur',
                'cod_departamento' => '14',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Yayantique',
                'codigo_municipio' => '19',
                'nombre_municipio_oficial' => 'La Unión Sur',
                'cod_departamento' => '14',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_distrito' => 'Yucuaiquín',
                'codigo_municipio' => '19',
                'nombre_municipio_oficial' => 'La Unión Sur',
                'cod_departamento' => '14',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
