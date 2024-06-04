<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            "user_id" => mt_rand(1, 10),
            "ticket_id" => mt_rand(1, 100),
            "quantity" => $this->faker->numberBetween(1, 10),
            "status" => $this->faker->boolean(),
            "transaction_date" => $this->faker->dateTimeThisYear(),
        ];
    }
}
