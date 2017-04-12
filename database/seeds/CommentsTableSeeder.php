<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Comment;
class CommentsTableSeeder extends Seeder
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
            Comment::create([
                'comment' =>$faker->text,
                'parent_id' => 0,
                'question_id' => $faker->numberBetween(1, 20),
                'created' => \Carbon\Carbon::now(),
                'user_id' => $i+1
            ]);
        }
    }
}
