<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id('post_id'); // Primary key
            $table->foreignId('user_id') // Foreign key for users
                  ->constrained('users') // References users table
                  ->onDelete('cascade'); // Delete posts when user is deleted
            $table->text('content'); // Content of the post
            $table->timestamps(); // Created at and updated at
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts'); // Drop table on rollback
    }
}