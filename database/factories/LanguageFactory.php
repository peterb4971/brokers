<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Language>
 */
class LanguageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'name_native' => $this->faker->name,
            'dir' => $this->faker->randomElement(['ltr', 'rtl']),
            'code' => $this->faker->unique()->locale,
            'status' => $this->faker->boolean,
        ];
    }
}
