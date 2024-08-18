<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $id = 'TR-' . Str::upper(Str::random(2)) . '-' . mt_rand(100, 999);

        return [
            "id" => $id, // Set ID dengan format TR-AB-123
            "user_id" => mt_rand(1, 10),
            "ticket_id" => mt_rand(1, 15),
            "quantity" => $this->faker->numberBetween(1, 10),
            "buyer_name" => $this->faker->name(),
            "phone" => $this->faker->phoneNumber(),
            "email" => $this->faker->email(),
            "ticket_date" => $this->faker->date()
        ];
    }
}
