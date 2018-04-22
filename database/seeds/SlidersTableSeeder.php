<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([

            [
                
                'image' =>  'c5UTdhFwvZkEaqbduzuWysnwQj7fcP7S2eDtbo7J.mp4',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
            

        ]);
    }
}
