<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
            'description' => $this->faker->sentence(rand(1, 3), true) ,
            'image' => $this->faker->imageUrl(),
            'price' => $this->faker->numberBetween(1000, 1500),
            'active' => $this->faker->boolean(80),
            // 'quantity' => $this->faker->numberBetween(1, 10),
        ];
    }
}
