<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'lastName' => $this->faker->lastName(),
            'phoneNumber' => $this->faker->phoneNumber(),
            'street' => $this->faker->streetAddress(),
            'country' => $this->faker->country(),
            'city' => $this->faker->city()
        ];
    }
}
