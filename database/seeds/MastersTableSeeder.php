<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class MastersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('masters')->insert([
            [
                'name' => 'Рейпольский А.Д.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Митков Павел',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Рудаева Е.Л.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Уркинеев Д.Л.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Гусев Валерий',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],

        ]);
    }
}
