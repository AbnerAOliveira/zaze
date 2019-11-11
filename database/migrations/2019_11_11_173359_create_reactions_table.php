<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->on('users')->references('id');
            $table->unsignedBigInteger('posts_id');
            $table->foreign('posts_id')->on('posts')->references('id');
            $table->unsignedBigInteger('comments_id')->nullable();
            $table->foreign('comments_id')->on('commits')->references('id');
            $table->integer('expression')->nullable();
            $table->unsignedBigInteger('replies_id');
            $table->foreign('replies_id')->on('replies')->references('id')->onDelete('cascade');
            $table->timestamp('datetime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reactions');
    }
}
