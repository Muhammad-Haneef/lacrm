<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Organization;
use App\Models\Contact;
use App\Models\Lead;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Organization::factory(100)->has(Contact::factory(3))->create();
        Organization::factory(100)->has(Lead::factory(3))->create();
    }
}
