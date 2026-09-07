<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
            'title' => fake()->title(),
            'tracking_code' => fake()->postcode(),
            'price' => fake()->numberBetween(1000000, 9999999),
            'price_discounted' => fake()->numberBetween(1000000, 9999999),
            'stock' => fake()->numberBetween(1, 60),
            'status' => 'active'
        ];
    }
}
