<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Calle;

class CallesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   //calles ciudad 1
        Calle::create(['nombre'=>'Avenida 18 de Septiembre','id_ciudad'=>1]);
        Calle::create(['nombre'=>'Avenida Diego Portales','id_ciudad'=>1]);
        Calle::create(['nombre'=>'Avenida General Velásquez','id_ciudad'=>1]);
        Calle::create(['nombre'=>'Avenida Santa María','id_ciudad'=>1]);
        Calle::create(['nombre'=>'Avenida Vicuña Mackenna','id_ciudad'=>1]);
        Calle::create(['nombre'=>'Avenida 18 de Septiembre','id_ciudad'=>1]);
        //calle ciudad 2
        Calle::create(['nombre'=>'Avenida Diego Portales','id_ciudad'=>2]);
        Calle::create(['nombre'=>'Avenida General Velásquez','id_ciudad'=>2]);
        Calle::create(['nombre'=>'Avenida Santa María','id_ciudad'=>2]);
        Calle::create(['nombre'=>'Avenida Vicuña Mackenna','id_ciudad'=>2]);
        Calle::create(['nombre'=>'Avenida 18 de Septiembre','id_ciudad'=>2]);
        //calle ciudad 3
        Calle::create(['nombre'=>'Avenida Diego Portales','id_ciudad'=>3]);
        Calle::create(['nombre'=>'Avenida General Velásquez','id_ciudad'=>3]);
        Calle::create(['nombre'=>'Avenida Santa María','id_ciudad'=>3]);
        Calle::create(['nombre'=>'Avenida Vicuña Mackenna','id_ciudad'=>3]);
        Calle::create(['nombre'=>'Avenida 18 de Septiembre','id_ciudad'=>3]);
        Calle::create(['nombre'=>'Avenida Diego Portales','id_ciudad'=>3]);
    }
}
