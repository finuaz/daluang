<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table = "books";
    public $primaryKey = 'id_book';

    public $timestamps = true;

    protected $fillable = ['title','sub_title','author','publisher','genre','description','goodreads','image','ISBN','ISBN_13'];


}
