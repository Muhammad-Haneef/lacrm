<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sms>
 */
class SmsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'number'=>fake()->phoneNumber(),
            'email'=>fake()->unique()->safeEmail(),
            'sms'=>fake()->sentence(10),

            'add_by'=>fake()->randomElement(User::query()->get('id'))
        ];
    }
}
