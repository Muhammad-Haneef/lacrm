<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Tag;
use App\Models\Organization;
use App\Models\LeadStatus;
use App\Models\LeadSource;
use App\Models\AreaOfLaw;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lead>
 */
class LeadFactory extends Factory
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
            'email'=>fake()->unique()->safeEmail(),
            'phone'=>fake()->phoneNumber(),
            'mobile'=>fake()->phoneNumber(),
            'adderss'=>fake()->address(),
            'short_note'=>fake()->sentence(10),
            
            'tags'=>fake()->randomElement(Tag::query()->get('id')),
            'organization_id'=>fake()->randomElement(Organization::query()->get('id')),
            'lead_status_id'=>fake()->randomElement(LeadStatus::query()->get('id')),
            'lead_source_id'=>fake()->randomElement(LeadSource::query()->get('id')),
            'area_of_law_id'=>fake()->randomElement(AreaOfLaw::query()->get('id')),
            'add_by'=>fake()->randomElement(User::query()->get('id'))
        ];
    }
}
