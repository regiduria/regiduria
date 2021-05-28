<?php

namespace Database\Factories;

use App\Models\Correspondencia;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CorrespondenciaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Correspondencia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'clave'=>$this->faker->sentence(),
            'tipo_tramite'=>$this->faker->sentence(),
            'numero_oficio'=>$this->faker->sentence(),
            'fecha_tramite'=>$this->faker->date(),
            'fecha_recibido'=>$this->faker->date(),
            'descripcion_tramite'=>$this->faker->sentence(),
            'nombre_suscrito'=>$this->faker->sentence(),
            'cargo'=>$this->faker->sentence(),
            'telefono'=>$this->faker->sentence(),
            'dirigido'=>$this->faker->sentence(),

            'observaciones'=>$this->faker->sentence(),
        ];
    }
}
