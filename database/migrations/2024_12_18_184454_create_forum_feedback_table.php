<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumFeedbackTable extends Migration
{
    public function up()
    {
        Schema::create('forum_feedback', function (Blueprint $table) {
            $table->id('comment_id');
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('user_id');
            $table->text('content');
        
            $table->foreign('post_id')->references('post_id')->on('forum_posts')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('forum_feedback');
    }
}