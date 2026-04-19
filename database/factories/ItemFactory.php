<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Item>
 */
class ItemFactory extends Factory
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
            'description' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(1000, 100000),
            'category_id' => $this->faker->numberBetween(1, 2), // Assuming you have 2 categories
            'img' => fake()->randomElement(['https://images.unsplash.com/photo-1591325418441-ff678baf78ef', 'https://images.unsplash.com/photo-1611810175440-aec1ef36d8c1', 'https://images.unsplash.com/photo-1595275320712-24b6f2b0a984']), // Replace with actual image paths
            'is_active' => true,
        ];
    }
}
