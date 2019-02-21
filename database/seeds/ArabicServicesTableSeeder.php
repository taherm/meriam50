<?php

use Illuminate\Database\Seeder;

class ArabicservicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('arabicservices')->delete();
        
        \DB::table('arabicservices')->insert(array (
            0 => 
            array (
                'arabicmenu_id' => 4,
                'id' => 1,
                'title' => 'التعامل مع ذوي الاحتياجات الخاضة',
                'description' => '<p>ورشة عمل بعنوان التعامل مع ذوي الاحتياجات الخاضة</p>
<p>برعاية وزارة الشباب و بيت التمويل الكويتي</p>',
                'image' => '117a9ae7d2dfe1c7650d5f16cbe13180.jpeg',
                'created_at' => '2018-12-05 14:41:45',
                'updated_at' => '2019-02-21 15:53:21',
            ),
            1 => 
            array (
                'arabicmenu_id' => 4,
                'id' => 2,
                'title' => 'الملتقى الوطني',
                'description' => '<p><strong>الملتقى الوطني الأول للتنمية الشبابية<br /></strong></p>
<p><strong>لإبراز أهم التجارب الكويتية</strong></p>',
                'image' => 'cb8db38ffbec1a72c5370d4d215107ad.jpeg',
                'created_at' => '2018-12-05 14:41:45',
                'updated_at' => '2019-02-21 15:54:47',
            ),
            2 => 
            array (
                'arabicmenu_id' => 4,
                'id' => 3,
                'title' => 'إتيكيت التعامل مع ذوي الاحتياجات الخاصة',
                'description' => '<p><strong>دورة بعنوان إتيكيت التعامل مع ذوي الاحتياجات الخاصة<br /></strong></p>
<p><strong>برعاية كل من</strong></p>
<p><strong> وزارة الشباب </strong></p>
<p><strong>الصندوق الوطني</strong></p>
<p><strong>شركة البترول الوطنية</strong></p>',
                'image' => 'c90354d14dc0d6d136b58fc28845d447.jpeg',
                'created_at' => '2018-12-05 14:41:45',
                'updated_at' => '2019-02-21 15:56:06',
            ),
        ));
        
        
    }
}