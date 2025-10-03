<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\HazardousWastes;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HazardousWaste>
 */
class HazardousWastesFactory extends Factory
{

    protected $model = HazardousWastes::class;

    public function definition(): array
    {
        $hazardCharacteristics = ['Corrosivo', 'Inflamable', 'Tóxico', 'Explosivo', 'Reactivo', 'Infeccioso'];
        $frequencies = ['Diaria', 'Semanal', 'Mensual', 'Ocasional'];
        $states = ['Sólido', 'Líquido', 'Gaseoso', 'Pasta'];
        $units = ['kg', 'litros', 'unidades'];

        return [
            'date' => $this->faker->date(),
            'generating_unit' => $this->faker->randomElement(['Laboratorio Químico', 'Taller Mecánico', 'Área Biomédica', 'Almacén']),
            'waste_name' => $this->faker->randomElement(['Ácido Sulfúrico', 'Aceite Usado', 'Residuos Biomédicos', 'Disolvente Químico', 'Pinturas']),
            'hazard_characteristic' => $this->faker->randomElement($hazardCharacteristics),
            'frequency' => $this->faker->randomElement($frequencies),
            'physical_state' => $this->faker->randomElement($states),
            'quantity' => $this->faker->randomFloat(2, 1, 200),
            'unit' => $this->faker->randomElement($units),
            'delivered_by' => $this->faker->name(),
            'registered_by' => $this->faker->name(),
        ];
    }
}
