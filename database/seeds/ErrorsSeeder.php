<?php

use Illuminate\Database\Seeder;

class ErrorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('errors')->insert([
            'code' => 400,
            'title' => 'Foute aanvraag',
            'text' => 'Foute aanvraag'
        ]);
        DB::table('errors')->insert([
            'code' => 401,
            'title' => 'Ongeautoriseerd',
            'text' => 'Ongeautoriseerd'
        ]);
        DB::table('errors')->insert([
            'code' => 403,
            'title' => 'Verboden',
            'text' => 'Verboden'
        ]);
        DB::table('errors')->insert([
            'code' => 404,
            'title' => 'Niet gevonden',
            'text' => 'Niet gevonden'
        ]);
        DB::table('errors')->insert([
            'code' => 500,
            'title' => 'Interne fout',
            'text' => 'Interne fout'
        ]);
    }
}
