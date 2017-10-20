<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class TechniquesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('techniques')->insert([
            [
                'name' => 'Карандаш',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Акрил',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Акварель',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Масло',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Тушь',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Каменная живопись',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
