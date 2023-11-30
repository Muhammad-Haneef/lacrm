<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $this->call([
            AreaOfLawSeeder::class,
            ContactCategorySeeder::class,
            ContactMethodSeeder::class,
            DepartmentSeeder::class,
            LeadSourceSeeder::class,
            LeadStatusSeeder::class,
            MatterStatusSeeder::class,
            PrioritySeeder::class,
            RoleSeeder::class,
            TagSeeder::class,
            TaskStatusSeeder::class,
            TypeOfWorkSeeder::class,
            PredefineSmsSeeder::class,
            //PredefineEmailSeeder::class,
            UserSeeder::class,
            OrganizationSeeder::class,
            CallSeeder::class,
            CommentSeeder::class,
            MeetingSeeder::class,
            EventSeeder::class,
            NoteSeeder::class,
            NotificationSeeder::class,
            ReminderSeeder::class,
            MatterSeeder::class,
            TaskSeeder::class,
            SmsSeeder::class,
        ]);

    }
}
