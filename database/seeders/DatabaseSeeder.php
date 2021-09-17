<?php

namespace Database\Seeders;

use App\Models\Rol;
use App\Models\User;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Database\Seeder;
use App\Models\Producto_imagene;
use Database\Seeders\Calculadora_aereaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Rol::factory(3)->create();
        Categoria::factory(10)->create();
       User::factory(100)->create();
       Producto::factory(1000)->create();
       Producto_imagene::factory(100)->create();
       $this->call(Calculadora_aereaSeeder::class);

    }
}
