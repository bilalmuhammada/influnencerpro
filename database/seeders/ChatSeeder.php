<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Chat;
use App\Models\Message;
use App\Models\Attachment;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Get some users to act as chat participants
        $users = User::limit(10)->get();

        if ($users->count() < 2) {
            $this->command->info('Need at least 2 users to seed chats.');
            return;
        }

        // Available image filenames from public/uploads/users
        $filenames = [
            'Akhilesh-Thakur.jpg4.jpg',
            'Sameera-Shetty.png4.png',
            'Neethu-Joseph.jpg4.jpg',
            'avatar-07.jpg6.jpg',
            'isabelle.jpg4.jpg'
        ];

        foreach ($users as $index => $user) {
            // Ensure some users have profile images
            if ($index < count($filenames)) {
                Attachment::updateOrCreate(
                    [
                        'object_id' => $user->id,
                        'object' => 'User',
                        'context' => 'influencer-profile-image'
                    ],
                    [
                        'name' => $filenames[$index],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                );
            }

            // Create chats for each user with 2-3 other users
            $otherUsers = $users->where('id', '!=', $user->id)->random(rand(1, 3));

            foreach ($otherUsers as $otherUser) {
                // Check if chat already exists
                $chat = Chat::where(function($query) use ($user, $otherUser) {
                    $query->where('first_user_id', $user->id)
                          ->where('second_user_id', $otherUser->id);
                })->orWhere(function($query) use ($user, $otherUser) {
                    $query->where('first_user_id', $otherUser->id)
                          ->where('second_user_id', $user->id);
                })->first();

                if (!$chat) {
                    $chat = Chat::create([
                        'first_user_id' => $user->id,
                        'second_user_id' => $otherUser->id,
                        'status' => 'accepted',
                        'initiated_by' => $user->id,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }

                // Create 3-8 messages for this chat
                $numMessages = rand(3, 8);
                for ($i = 0; $i < $numMessages; $i++) {
                    $senderId = $faker->boolean(50) ? $user->id : $otherUser->id;
                    $receiverId = ($senderId == $user->id) ? $otherUser->id : $user->id;

                    Message::create([
                        'chat_id' => $chat->id,
                        'sender_id' => $senderId,
                        'receiver_id' => $receiverId,
                        'message' => $faker->sentence(rand(5, 15)),
                        'is_readed' => ($i == $numMessages - 1) ? 0 : 1, // Last message might be unread
                        'sended_at' => Carbon::now()->subMinutes(rand(1, 10000)),
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }

        $this->command->info('Chats and messages seeded successfully with images!');
    }
}
