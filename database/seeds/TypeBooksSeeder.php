<?php

use Illuminate\Database\Seeder;

class TypeBooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typebook = new \App\Typebook();
        $typebook->typebook_name = 'นวนิยาย';
        $typebook->save();
        $typebook = new \App\Typebook();
        $typebook->typebook_name = 'การ์ตูน';
        $typebook->save();
        $typebook = new \App\Typebook();
        $typebook->typebook_name = 'สำหรับเด็ก';
        $typebook->save();
        $typebook = new \App\Typebook();
        $typebook->typebook_name = 'ทำอาหาร';
        $typebook->save();
        $typebook = new \App\Typebook();
        $typebook->typebook_name = 'ผู้สูงอายุ';
        $typebook->save();
        $typebook = new \App\Typebook();
        $typebook->typebook_name = 'การเงิน';
        $typebook->save();
        $typebook = new \App\Typebook();
        $typebook->typebook_name = 'บัญชี';
        $typebook->save();
        $typebook = new \App\Typebook();
        $typebook->typebook_name = 'เตรียมสอบ';
        $typebook->save();
        $typebook = new \App\Typebook();
        $typebook->typebook_name = 'หนังสือเรียนประถม';
        $typebook->save();
        $typebook = new \App\Typebook();
        $typebook->typebook_name = 'หนังสือเรียนมัธยม';
        $typebook->save();
    }
}
