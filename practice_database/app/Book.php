<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $guarded = array('id');
    public $timestamps = true;
    protected $fillable = [
        'book_name','auther','price','stocks','release_dt',
    ];
}
