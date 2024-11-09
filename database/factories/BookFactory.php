<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName() + ' ' + $this->faker->colorName(),
            'author'=>$this->faker->name(),
            'published_date'=>$this->faker->dateTimeThisCentury(),
            'views'=>$this->faker->numberBetween(0,5000),
            'words'=>$this->faker->numberBetween(10000,100000)
        ];
    }
}
