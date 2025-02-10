<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TravelRequest>
 */
class TravelRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 100),
            'order_id' => fake()->uuid(),
            'name_applicant' => fake()->name(),
            'origin' => fake()->address(),
            'destination' => fake()->address(),
            'departure_date' => fake()->date('Y-m-d H:i:s'),
            'return_date' => fake()->date('Y-m-d H:i:s'),
            'status' => fake()->randomElement(['ACTIVE', 'DISABLED', 'PENDING']),
        ];
    }
}
