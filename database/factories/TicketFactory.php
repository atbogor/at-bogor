<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->sentence(mt_rand(2, 6)),
            "slug" => $this->faker->slug(),
            "price" => $this->faker->numberBetween(10000, 500000),
            "location" => $this->faker->city(),
            "description" => $this->faker->paragraph(mt_rand(5, 15)),
            "category_id" => mt_rand(1, 3),
        ];
    }
}
