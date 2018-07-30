<?php

use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new \App\Book();
        $book->book_title = 'การ์ตูน panda';
        $book->book_price = 100;
        $book->typebooks_id = 2;
        $book->book_image = 'nopic.png';
        $book->save();

        $book = new \App\Book();
        $book->book_title = 'การเงินกับชีวิตประจำวัน';
        $book->book_price = 300;
        $book->typebooks_id = 6;
        $book->book_image = 'nopic.png';
        $book->save();

        $book = new \App\Book();
        $book->book_title = 'สูตรก๋วยเตี๋ยวเรือ';
        $book->book_price = 100;
        $book->typebooks_id = 4;
        $book->book_image = 'nopic.png';
        $book->save();
    }
}
