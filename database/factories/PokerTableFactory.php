<?php

namespace Database\Factories;

use App\Enums\PokerTableStatusEnum;
use App\Models\{PokerTable, User};
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PokerTable>
 */
class PokerTableFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name'    => fake()->name,
            'cards'   => [1, 2, 3, 5, 8, 13, 21, 34],
            'status'  => fake()->randomElement(PokerTableStatusEnum::cases()),
        ];
    }

}
