<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Anne',
            'email' => 'blendit@live.nl',
            'password' => Hash::make('12345')
        ]);
    }
}
