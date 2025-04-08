<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Phrase;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Favorites>
 */
class FavoriteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()?->id,
            'phrase_id' => Phrase::inRandomOrder()->first()?->id,
        ];
    }
}
