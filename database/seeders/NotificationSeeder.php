<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Faker\Factory as Faker;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Get all users
        $users = User::all();

        if ($users->isEmpty()) {
            $this->command->info('No users found in the database. Please seed users first.');
            return;
        }

        foreach ($users as $user) {
            // Create between 5 to 15 notifications for each user
            $numberOfNotifications = rand(5, 15);

            for ($i = 0; $i < $numberOfNotifications; $i++) {
                DB::table('notifications')->insert([
                    'user_id' => $user->id,
                    'type' => 'App\Notifications\GenericNotification',
                    'notifiable_type' => 'App\Models\User',
                    'notifiable_id' => $user->id,
                    'data' => $faker->sentence(rand(6, 12)), // Random sentence as notification message
                    'read_at' => $faker->boolean(60) ? $faker->dateTimeThisMonth() : null, // 60% chance of being read
                    'created_at' => $faker->dateTimeBetween('-1 month', 'now'),
                    'updated_at' => now(),
                ]);
            }
        }

        $this->command->info('Notifications seeded successfully!');
    }
}
