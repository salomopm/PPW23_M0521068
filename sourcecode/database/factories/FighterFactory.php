<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fighter>
 */
class FighterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()->name(),
            'age'=> fake()-> numberBetween(20,40),
            'basic' => fake() -> randomElement(["Brazilian Jiu jutsu", "Muay Thai", "Boxing", "Kick Boxing", "Judo"]),
            'weightClass' => fake() -> randomElement(["Lightweight", "Welterweight", "Middleweight", "Light-Heavyweight", "Heavyweight"])
        ];
    }
    }
