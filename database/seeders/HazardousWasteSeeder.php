<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HazardousWastes;

class HazardousWasteSeeder extends Seeder
{
    public function run(): void
    {
        HazardousWastes::factory()->count(200)->create();
    }
}
