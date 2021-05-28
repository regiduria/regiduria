<?php

namespace Database\Factories;

use App\Models\Borradore;

use Illuminate\Database\Eloquent\Factories\Factory;

class BorradoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Borradore::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'area' =>$this->faker->randomElement(['PANTEONES','BIENES','SERVICIOS MUNICIPALES','MERCADOS','COMERCIO EN VIA PUBLICA']),
            'tipo_tramite'=>$this->faker->sentence(),
            'numero_oficio'=>$this->faker->sentence(),
            'fecha_tramite'=>$this->faker->date(),
            'fecha_recibido'=>$this->faker->date(),
            'descripcion_tramite'=>$this->faker->sentence(),
            'nombre_suscrito'=>$this->faker->sentence(),
            'cargo'=>$this->faker->sentence(),
            'telefono'=>$this->faker->sentence(),
            'dirigido'=>$this->faker->sentence(),
            'cargo_dirigido'=>$this->faker->sentence(),
            'estado'=>$this->faker->randomElement(['FINALIZADO','PROCESO','URGENTE']),
            'lic_dirige'=>$this->faker->sentence(),
            'ubicacion' =>$this->faker->randomElement(['ARCHIVERO 1','ARCHIVERO 2']),
            'nombre_carpeta'=>$this->faker->sentence(),
            'nc_carpeta'=>$this->faker->sentence(),
            'observaciones'=>$this->faker->sentence(),
           // 'deleted_at' => now(),
        ];
    }
}
