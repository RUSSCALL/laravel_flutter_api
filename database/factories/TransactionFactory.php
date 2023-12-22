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
            'category_id' => $this->faker->numberBetween([1, 10]),
            'user_id' => $this->faker->randomElement([1, 2]),
            'transaction_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'amount' => $this->faker->numberBetween(1000, 100000),
            'description' => $this->faker->sentence,
        ];
    }
}
