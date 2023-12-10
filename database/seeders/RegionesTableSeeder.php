<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;
class RegionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Region::create(['nombre' => 'Arica y Parinacota']);
        Region::create(['nombre' => 'Tarapacá']);
        Region::create(['nombre' => 'Antofagasta']);
    }
}
