<?php

use Illuminate\Database\Seeder;

class OpeningtimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('openingtimes')->insert([
            'day' => 'maandag',
            'value' => '',
        ]);
        DB::table('openingtimes')->insert([
            'day' => 'dinsdag',
            'value' => '',
        ]);
        DB::table('openingtimes')->insert([
            'day' => 'woensdag',
            'value' => '',
        ]);
        DB::table('openingtimes')->insert([
            'day' => 'donderdag',
            'value' => '',
        ]);
        DB::table('openingtimes')->insert([
            'day' => 'vrijdag',
            'value' => '',
        ]);
        DB::table('openingtimes')->insert([
            'day' => 'zaterdag',
            'value' => '',
        ]);
        DB::table('openingtimes')->insert([
            'day' => 'zondag',
            'value' => '',
        ]);
    }
}
