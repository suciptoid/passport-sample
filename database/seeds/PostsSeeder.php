<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $user = App\User::find(1);

        foreach(range(1,20) as $index){
            Post::create([
                'title' => $faker->text(20),
                'body'  => $faker->text(100),
                'user_id'   => $user->id
            ]);
        }
    }
}
