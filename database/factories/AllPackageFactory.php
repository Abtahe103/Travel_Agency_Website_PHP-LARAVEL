<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AllPackage>
 */
class AllPackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title1' => $this->faker->sentence(3),
            'location' => $this->faker->city(),
            'country' => $this->faker->randomElement(['Bangladesh', 'India', 'Nepal', 'Bhutan', 'Maldives', 'Thailand', 'Singapore', 'Malaysia','China']),
            'package_type' => $this->faker->randomElement(['Normal','Special']),
            'rating' => $this->faker->randomFloat(1, 3, 5, 7, 9, 10),
            'tour_length' => $this->faker->randomElement(['3 Days', '5 Days', '1 Week', '10 Days']),
            'tour_description' => $this->faker->paragraph(3),
            'price' => $this->faker->numberBetween(5000, 20000),
            'discount_price' => $this->faker->numberBetween(3000, 18000),
            'image' => $this->faker->imageUrl(640, 480, 'travel', true),
        ];
    }
}
