<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->sentence(2),
            'description'=>fake()->text(100),
            'start_at'=>fake()->dateTime(),
            'end_at'=>fake()->dateTime(),
            'location'=>fake()->address(),
            'related_to'=>fake()->randomElement(['General','Leads','Contacts','Matters']), 
            'related_to_id'=>rand(1,300),
            'add_by'=>fake()->randomElement(User::query()->get('id'))
        ];
    }
}
