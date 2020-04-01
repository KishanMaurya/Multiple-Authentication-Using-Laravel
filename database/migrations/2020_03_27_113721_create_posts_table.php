<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('title');
            $table->string('body');
            $table->string('image');
            $table->bigInteger('post_id')->unsigned()->nullable();
            $table->integer('writer_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('post_id')->references('id')->on('users')  
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('writer_id')->references('id')->on('writers')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
