<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Tag;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organization>
 */
class OrganizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->company(),
            'email'=>fake()->unique()->safeEmail(),
            'description'=>fake()->paragraph(),
            'phone'=>fake()->phoneNumber(),
            'fax'=>fake()->phoneNumber(),
            'website'=>"",
            'linkedin'=>"https://www.linkedin.com/",
            'facebook'=>"https://web.facebook.com/",
            'twitter'=>"https://twitter.com/",
            'billing_address'=>fake()->address(),
            'billing_city'=>fake()->city(),
            'billing_state'=>fake()->state(),
            'billing_zip'=>fake()->postcode(),
            'billing_country'=>fake()->country(),
            'shipping_address'=>fake()->address(),
            'shipping_city'=>fake()->city(),
            'shipping_state'=>fake()->state(),
            'shipping_zip'=>fake()->postcode(),
            'shipping_country'=>fake()->country(),

            'tags'=>fake()->randomElement(Tag::query()->get('id')),
            'add_by'=>fake()->randomElement(User::query()->get('id'))
        ];
    }
}
