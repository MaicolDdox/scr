<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WasteEntrie;

class WasteEntrieSeeder extends Seeder
{
    public function run(): void
    {
        WasteEntrie::factory()->count(200)->create();
    }
}
