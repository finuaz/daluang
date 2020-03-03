<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = "posts";
    public $primaryKey = 'id_post';

    public $timestamps = true;

    protected $fillable = ['title','body','category','tag'];


}
