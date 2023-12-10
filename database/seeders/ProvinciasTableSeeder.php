<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Provincia;

class ProvinciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Provincia::create(['nombre'=>'Provincia de Arica','id_region'=>1]);//1
        Provincia::create(['nombre'=>'Provincia de Parinacota','id_region'=>1]);//2
        Provincia::create(['nombre'=>'Provincia de Iquique','id_region'=>2]);//3
        //region 3 sin provincia asignada
    }
}
