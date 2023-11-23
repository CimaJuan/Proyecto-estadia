<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdentificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $identificacion = ['INE', 'RFC', 'PASAPORTE', 'LICENCIA'];

        foreach($identificacion as $identificacion){
            DB::table('identificacion')->insert([
                'nombre' => $identificacion
            ]);
        }
    }
}
