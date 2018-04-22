<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' =>'$2y$10$.NVY8CDjp5Np3zTqc91k1OgkpJXi076nusKk7fKksJsqgS28/e5Ge'
        ]);
    }
}
