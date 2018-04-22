<?php

use Illuminate\Database\Seeder;

class ArabicmenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Arabicmenus')->insert([

            [
                'id'=>'4',
                'title' =>  'الدورات',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id'=>'5',
                'title' => 'المؤلفات',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            

        ]);
    }
}
