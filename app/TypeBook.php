<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeBook extends Model
{
    protected $table = 'typebooks';
    protected $primaryKey = 'typebook_id';

    public function books() {
        return $this->hasMany(Book::class);
    }
}
