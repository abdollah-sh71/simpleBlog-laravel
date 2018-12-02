<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Carbon\Carbon;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset the users table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('posts')->truncate();

        // generate 3 users/author
        $posts = [];
        $faker = Factory::create();
        $date = Carbon::create(2016, 7, 18, 9);

        for ($i = 1; $i <= 10; $i++)
        {
            $image = "Post_Image_" . rand(1, 5) . ".jpg";
            $date->addDays(1);
            $publishedDate = clone($date);
            $createdDate   = clone($date);

            $posts[] = [
                'title'        => $faker->sentence(rand(8, 12)),
                'excerpt'      => $faker->text(rand(250, 300)),
                'content'         => $faker->paragraphs(rand(10, 15), true),
                'picture'        => rand(0, 1) == 1 ? $image : NULL,
                'created_at'   => $createdDate,
                'updated_at'   => $createdDate,
            ];
        }
        DB::table('posts')->insert($posts);
    }
}
