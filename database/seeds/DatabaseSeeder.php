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
         $this->call([
            ArabicMenusTableSeeder::class,
            ArabicServicesTableSeeder::class,
            SlidersTableSeeder::class,
            UsersTableSeeder::class,
            AlbumsTableSeeder::class
        ]);
    }
}

