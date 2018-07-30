<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'book_id';
    protected $fillable = ['title', 'price', 'typebooks_id'];

    public function typebooks() {
        return $this->belongsTo(Typebook::class, 'typebooks_id');
    }
}
