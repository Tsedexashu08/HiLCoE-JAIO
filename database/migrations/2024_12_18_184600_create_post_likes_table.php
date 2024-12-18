<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostLikesTable extends Migration
{
    public function up()
    {
        Schema::create('post_likes', function (Blueprint $table) {
            $table->id('like_id'); // Primary key
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('user_id');
            
            // Define foreign keys
            $table->foreign('post_id')
                  ->references('post_id') 
                  ->on('posts')
                  ->onDelete('cascade');
                  
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('post_likes'); // Drop table on rollback
    }
}