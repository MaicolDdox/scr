<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WasteEntrie>
 */
class WasteEntrieFactory extends Factory
{
    protected $model = \App\Models\WasteEntrie::class;

    public function definition(): array
    {
        $units = ['kg', 'm³', 'unidades'];
        $areas = ['Área A', 'Área B', 'Área C'];
        $wasteTypes = ['Orgánico', 'Inorgánico', 'Reciclable', 'Peligroso'];

        return [
            'date' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'area' => $this->faker->randomElement($areas),
            'waste_type' => $this->faker->randomElement($wasteTypes),
            'quantity' => $this->faker->randomFloat(2, 1, 100),
            'unit' => $this->faker->randomElement($units),
            'delivered_by' => $this->faker->name(),
            'area_responsible' => $this->faker->name(),
            'document_number' => $this->faker->numerify('DOC-###'),
            'signature' => $this->faker->name(),
            'observations' => $this->faker->sentence(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
