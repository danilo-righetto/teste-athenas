<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => fake('pt_BR')->unique()->randomDigit(),
            'name' => fake('pt_BR')->name(),
            'cpf' => fake('pt_BR')->cpf(),
            'email' => fake('pt_BR')->unique()->safeEmail(),
            'category' => fake('pt_BR')->randomElement([1, 2, 3])
        ];
    }
}
