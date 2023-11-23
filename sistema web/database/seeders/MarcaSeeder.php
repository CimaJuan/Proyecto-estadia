<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marca = ['Acura', 'Mini', 'Audi', 'Baic', 'BMW', 'Buick', 'Cadillac', 'Chevrolet', 'DODGE', 'Fiat', 'Ford', 'GMC', 'Honda', 'Hyundai', 'JAC', 'Jeep', 'Kia', 'Mazda', 'Mercedez', 'Mitsubishi', 'Nissan', 'RAM', 'Suzuki', 'Toyota', 'SEAT', 'Volkswagen', 'Tesla', 'Volvo', 'Renault', 'Subaru', 'Peugeot', 'Jaguar', 'Infiniti', 'Ferrari', 'Chrysler', 'Bentley', 'KENWORTH', 'International', 'Pontiac', 'Camión'];

        foreach($marca as $marca){
            DB::table('marca')->insert([
                'nombre' => $marca
            ]);
        }
    }
}
