<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Message;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker::create();
        for($i = 0; $i<20; $i++){
            Message::create([
                'msg' =>$faker->paragraph,
                'status' => 'unread',
                'created' => \Carbon\Carbon::now(),
                'sender_id' => rand(1, 10),
                'receiver_id' => rand(1, 10)
            ]);
        }

    }
}
