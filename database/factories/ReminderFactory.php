<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reminder>
 */
class ReminderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'reminding_date'=>fake()->dateTime(),
            'description'=>fake()->paragraph(),
            'related_to'=>fake()->randomElement(['General','Leads','Contacts','Matters']), 
            'related_to_id'=>rand(1,300),

            'add_by'=>fake()->randomElement(User::query()->get('id'))
        ];
    }
}
