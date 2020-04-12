<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->integer('kategori')->unsigned();
            $table->integer('tag')->unsigned()->nullable();
            $table->string('gambar')->nullable();
            $table->text('body');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('kategori')->references('id')->on('kategoris');
            $table->foreign('tag')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
