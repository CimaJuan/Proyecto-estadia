<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AplicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aplica = ['Si', 'No'];

        foreach($aplica as $aplica){
            DB::table('aplica')->insert([
                'nombre' => $aplica
            ]);
        }
    }
}
