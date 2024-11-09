<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    private static $options = ['Narrativo', 'Novela', 'Poesía', 'Historieta', 'Ensayo','Investigacion', 'Educativo'];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this::$options[$this->faker->numberBetween(0,  count($this::$options))-1]
        ];
    }
}
