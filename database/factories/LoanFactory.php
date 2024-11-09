<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loan>
 */
class LoanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $initYear = $this->faker->numberBetween(2010, 2024);
        $initDay = $this->faker->numberBetween(1, 13);
        
        $month1 = $this->faker->numberBetween(1,12);
        $month2 = $this->faker->numberBetween(1,12);

        $years = $this->faker->numberBetween(0,1);
        $endDay = $this->faker->numberBetween(13, 28);
        

        return [
            'init_date'=> date('Y-m-d', strtotime("{$initYear}-{($month1 < $month2) ? $month1: $month2}-{$initDay}")),
            'end_date'=> date('Y-m-d', strtotime("{($initYear+$years)}-{($month1 < $month2) ? $month2: $month1}-{$endDay}")),
            'user_id'=>User::factory(),
            'book_id'=>Book::factory(),
        ];
    }
}
