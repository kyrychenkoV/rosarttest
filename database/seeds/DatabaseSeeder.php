<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(TechniquesTableSeeder::class);
         $this->call(MastersTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
    }
}
