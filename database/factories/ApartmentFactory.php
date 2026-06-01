<?php

namespace Database\Factories;

use App\Models\Apartment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Apartment>
 */
class ApartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'city_id' => \App\Models\City::factory(),
            'name' => $this->faker->streetName(),
            'description' => $this->faker->paragraph(),
            'address' => $this->faker->address(),
            'status' => $this->faker->randomElement(['available', 'booked']),
            'price_per_night' => $this->faker->numberBetween(50, 500),
            'bedrooms' => $this->faker->numberBetween(1, 5),
            'bathrooms' => $this->faker->numberBetween(1, 3),
            'user_id' => \App\Models\User::factory(),
            'city_id' => \App\Models\City::factory(),
        ];
    }
}
