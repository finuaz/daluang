<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->varchar('title', 50);
            $table->varchar('author', 30);
            $table->varchar('publisher', 30)->nullable(true);
            $table->varchar('genre',15);
            $table->text('description')->nullable(true);
            $table->varchar('goodread',30)->nullable(true);
            $table->varchar('image',255)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down($column)
    {
        Schema::table('books', function ($table){
            $table->dropColumn($column);
        });
    }
}
