<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('comment');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('post_id')->unsigned()->nullable();
            $table->integer('commentable_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')  
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('post_id')->references('id')->on('posts')
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
        Schema::dropIfExists('comments');
    }
}
