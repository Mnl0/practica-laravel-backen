<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ciudad;

class CiudadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ciudad::create(['nombre'=>'Arica','id_provincia'=>1]);//1
        Ciudad::create(['nombre'=>'Putre','id_provincia'=>1]);//2
        Ciudad::create(['nombre'=>'Iquique','id_provincia'=>1]);//3
        Ciudad::create(['nombre'=>'Alto Hospicio','id_provincia'=>1]);//4
        Ciudad::create(['nombre'=>'Antofagasta','id_provincia'=>1]);//5

        Ciudad::create(['nombre'=>'Calama','id_provincia'=>2]);
        Ciudad::create(['nombre'=>'Tocopilla','id_provincia'=>2]);
        Ciudad::create(['nombre'=>'Chañaral','id_provincia'=>2]);
        Ciudad::create(['nombre'=>'Copiapó','id_provincia'=>2]);
        Ciudad::create(['nombre'=>'Vallenar','id_provincia'=>2]);

        //provincia 3 sin ciudades asignadas

    }
}
