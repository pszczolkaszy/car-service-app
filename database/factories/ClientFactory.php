<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'nip' => $this->faker->unique()->numberBetween(1000000000, 9999999999),
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'address_city' => $this->faker->city,
            'address_code' => $this->faker->postcode,
            'address_street' => $this->faker->streetName,
            'address_number' => $this->faker->numberBetween(1, 100),
            'address_local' => $this->faker->numberBetween(1, 100),
        ];
    }
}
