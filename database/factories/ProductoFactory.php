<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'precio' => $this->faker->numberBetween($min = 10, $max = 1000),
            'detalle' =>  $this->faker->text,
            'stock'=>$this->faker->randomDigit,
            'estado'=>$this->faker->randomElement($array = array ('inactivo','activo')),
            'categoria_id'=>$this->faker->numberBetween($min = 1, $max = 10),
        ];
    }
}
