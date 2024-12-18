<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumLikesTable extends Migration
{
    public function up()
    {
        Schema::create('forum_likes', function (Blueprint $table) {
            $table->id('like_id');
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('user_id');
           
            $table->timestamps();

            $table->foreign('post_id')->references('post_id')->on('forum_posts')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('forum_likes');
    }
}
