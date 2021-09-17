<?php

namespace Database\Factories;

use App\Models\Producto_imagene;
use Illuminate\Database\Eloquent\Factories\Factory;

class Producto_imageneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto_imagene::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'imagen' => $this->faker->imageUrl($width = 640, $height = 480),
           
            'producto_id'=>$this->faker->numberBetween($min = 1, $max = 100),
        ];
    }
}
