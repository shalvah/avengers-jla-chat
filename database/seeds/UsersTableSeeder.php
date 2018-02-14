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
        factory(\App\User::class)->create(['email' => 'jane.doe@test.com']);
        factory(\App\User::class)->create(['email' => 'john.doe@test.com']);
    }
}
