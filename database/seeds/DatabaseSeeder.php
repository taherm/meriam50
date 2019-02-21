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
            ArabicmenusTableSeeder::class,
            ArabicservicesTableSeeder::class,
            SlidersTableSeeder::class,
            UsersTableSeeder::class,
            AlbumsTableSeeder::class
        ]);
  //      $this->call(ArabicmenusTableSeeder::class);
    //    $this->call(ArabicservicesTableSeeder::class);
     //   $this->call(AlbumsTableSeeder::class);
    }
}

