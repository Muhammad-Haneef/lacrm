<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->sentence(10),
            'description'=>fake()->text(20),
            'assigned_to'=>rand(1,3),
            'task_status_id'=>rand(1,3),
            'priority_id'=>rand(1,3),
            'related_to'=>fake()->randomElement(['General','Leads','Contacts','Matters']), 
            'related_to_id'=>rand(1,300),

            'add_by'=>fake()->randomElement(User::query()->get('id'))
        ];
    }
}
