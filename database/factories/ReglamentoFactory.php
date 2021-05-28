<?php

namespace Database\Factories;

use App\Models\Reglamento;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReglamentoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reglamento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'area' =>$this->faker->randomElement(['PANTEONES','BIENES','SERVICIOS MUNICIPALES','MERCADOS','COMERCIO EN VIA PUBLICA']),
            'fecha_emitido'=>$this->faker->date(),
            'nombre'=>$this->faker->sentence(),
            'ubicacion'=>$this->faker->sentence(),
        ];
    }
}
