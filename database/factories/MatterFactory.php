<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\AreaOfLaw;
use App\Models\MatterStatus;
use App\Models\Priority;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matter>
 */
class MatterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'matter_number'=>rand(5000, 50000),
            'description'=>fake()->paragraph(),
            'originated_by'=>rand(1,3),
            'location'=>fake()->address(),
            'lead_id'=>rand(1,100),
            'open_date'=>fake()->date(),
            'close_date'=>fake()->date(),
            'limitation_date'=>fake()->date(),
            
            'area_of_law_id'=>fake()->randomElement(AreaOfLaw::query()->get('id')),
            'matter_status_id'=>fake()->randomElement(MatterStatus::query()->get('id')),
            'priority_id'=>fake()->randomElement(Priority::query()->get('id')),
            'add_by'=>fake()->randomElement(User::query()->get('id')),
        ];
    }
}
