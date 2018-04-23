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
            ArabicServicesTableSeeder::class,
            ArabicMenusTableSeeder::class,
            SlidersTableSeeder::class,
            UsersTableSeeder::class,
        ]);
    }
}

