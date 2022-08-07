<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'brand' => $this->faker->word,
            'model' => $this->faker->word,
            'production_year' => (string) $this->faker->year,
            'registration_year' => (string) $this->faker->year,
            'vin' => $this->faker->word,
            'plate' => $this->faker->word,
            'client_id' => $this->faker->numberBetween(1, 25),
        ];
    }
}
