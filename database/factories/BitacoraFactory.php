<?php

namespace Database\Factories;

use App\Models\Bitacora;
use Illuminate\Database\Eloquent\Factories\Factory;

class BitacoraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bitacora::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha'=>$this->faker->date(),
            'nombre'=>$this->faker->sentence(),
            'n_oficio'=>$this->faker->sentence(),
            'dirigido'=>$this->faker->sentence(),
            'area'=>$this->faker->sentence(),
            'direccion'=>$this->faker->sentence(),
            'firma'=>$this->faker->randomElement(['0','1']),
            'observaciones'=>$this->faker->sentence(),
        ];
    }
}
