< ? php

namespace App;

use Illuminate\ Database\ Eloquent\ Model;

class Book extends Model {
    //
    protected $table = "books";
    public $primaryKey = 'id_book';

    public $timestamps = true;

    protected $fillable = [
        'title',
        'sub_title',
        'author',
        'rating',
        'publisher',
        'genre',
        'description',
        'goodreads',
        'cover_image',
        'ISBN',
        'ISBN_13'
    ];


}
