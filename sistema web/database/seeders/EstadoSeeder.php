<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estado = ['Pendiente', 'Pagado', 'Baja'];

        foreach($estado as $estado){
            DB::table('estado')->insert([
                'nombre' => $estado
            ]);
        }
    }
}
