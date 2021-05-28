<?php

namespace Database\Factories;

use App\Models\Administradore;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdministradoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Administradore::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

            return [
                'area' =>$this->faker->randomElement(['PANTEONES','BIENES','SERVICIOS MUNICIPALES','MERCADOS','COMERCIO EN VIA PUBLICA']),
                'nombre'=>$this->faker->sentence(),
                'cargo'=>$this->faker->sentence(),
                'lugar'=>$this->faker->sentence(),
                'telefono'=>$this->faker->sentence(),
                'email'=>$this->faker->sentence(),

            ];

    }
}
