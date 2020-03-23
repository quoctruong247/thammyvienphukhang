<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(PostsTableSeeder::class);
         $this->call(SliderTableSeeder::class);
         $this->call(ProductTableSeeder::class);
         $this->call(LevelTableSeeder::class);
         $this->call(CustomersTableSeeder::class);
         
    }
}
