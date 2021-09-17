<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Calculadora_aerea;

class Calculadora_aereaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Calculadora_aerea::create([
            'factor_medidas'=>167,
            'flete1'=>5,
            'seguro'=>2,
            'iva'=>14.94,
           
        ]);
    }
}
