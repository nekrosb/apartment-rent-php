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
            'title' => $this->faker->streetName(),
            'description' => $this->faker->paragraph(),
            'address' => $this->faker->address(),
            'status' => $this->faker->randomElement(['available', 'booked']),
            'price' => $this->faker->numberBetween(50, 500),
            'bedrooms' => $this->faker->numberBetween(1, 5),
            'bathrooms' => $this->faker->numberBetween(1, 3),
            'user_id' => \App\Models\User::query()->inRandomOrder()->value('id'),
            'city_id' => \App\Models\City::query()->inRandomOrder()->value('id'),
        ];
    }
}
