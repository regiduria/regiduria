<?php

namespace Database\Seeders;

use App\Models\Administradore;
use App\Models\Bitacora;
use App\Models\Correspondencia;
use App\Models\Reglamento;
use App\Models\Tramite;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Correspondencia::factory(25)->create();
        Tramite::factory(500)->create();
        Administradore::factory(20)->create();
        Reglamento::factory(20)->create();
        Bitacora::factory(50)->create();
    }
}
