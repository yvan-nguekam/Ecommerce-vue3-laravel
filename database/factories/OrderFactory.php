<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "order_number" => uniqid()
            // "order_number" => $this->faker->uniqid()
            // "shipped_at" => $this->faker->dateTimeBetween('-1 month', 'now'),
            // "user_id" => $this->faker->numberBetween(1, 10),
        ];
    }
}
