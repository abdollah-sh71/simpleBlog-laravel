<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
        DB::table('users')->truncate();

        // generate 3 users/author
        DB::table('users')->insert([
            [
                'name' => "abdollah shams",
                'email' => "abdollah.sh71@gmail.com",
                'password' => bcrypt('123456789')
            ],
            [
                'name' => "ali dori",
                'email' => "alidori@test.com",
                'password' => bcrypt('secret')
            ],
            [
                'name' => "amir reza",
                'email' => "amirreza@test.com",
                'password' => bcrypt('1234567')
            ],
        ]);
    }
}
