<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Живопись',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Графика',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Изделия',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
