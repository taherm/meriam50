<?php

use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('albums')->delete();
        
        \DB::table('albums')->insert(array (
            0 => 
            array (
                'id' => 11,
                'image' => '0134e728b26e1d7bd3c3b94d05a13ab8.jpeg',
                'created_at' => '2019-02-21 05:45:13',
                'updated_at' => '2019-02-21 05:45:13',
            ),
            1 => 
            array (
                'id' => 12,
                'image' => 'fcd00f1feceda7fe1e51ce4c97c6d98b.jpeg',
                'created_at' => '2019-02-21 05:45:16',
                'updated_at' => '2019-02-21 05:45:16',
            ),
            2 => 
            array (
                'id' => 13,
                'image' => '88d5fb9ad97684f61be2fbefc9f8bc61.jpeg',
                'created_at' => '2019-02-21 05:45:20',
                'updated_at' => '2019-02-21 05:45:20',
            ),
        ));
        
        
    }
}