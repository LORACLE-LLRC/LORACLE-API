<?php

namespace Database\Seeders;

use App\Models\Reponse;
use App\Models\Service;
use App\Models\Internaute;
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
        Reponse::factory()->count(100)->create();
    }
}
