<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->text('short');
            $table->string('img');
            $table->integer('views');
            $table->integer('highlight');
            $table->integer('id_category')->unsigned();
            $table->integer('id_author')->unsigned();
            $table->foreign('id_category')->references('id')->on('categories');
            $table->foreign('id_author')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
