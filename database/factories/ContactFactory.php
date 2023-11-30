<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Tag;
use App\Models\Organization;
use App\Models\ContactCategory;
use App\Models\ContactMethod;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
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
            'home_phone'=>fake()->phoneNumber(),
            'other_phone'=>fake()->phoneNumber(),
            'mobile'=>fake()->phoneNumber(),
            'adderss'=>fake()->address(),
            'short_note'=>fake()->sentence(10),
            'linkedin'=>"https://www.linkedin.com/",
            'facebook'=>"https://web.facebook.com/",
            'twitter'=>"https://twitter.com/",
            
            'tags'=>fake()->randomElement(Tag::query()->get('id')),
            'organization_id'=>fake()->randomElement(Organization::query()->get('id')),
            'contact_category_id'=>fake()->randomElement(ContactCategory::query()->get('id')),
            'contact_method_id'=>fake()->randomElement(ContactMethod::query()->get('id')),
            'add_by'=>fake()->randomElement(User::query()->get('id'))
        ];
    }
}
