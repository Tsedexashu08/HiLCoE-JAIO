<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscussionForumsTable extends Migration
{
    public function up()
    {
        Schema::create('discussion_forums', function (Blueprint $table) {
            $table->id('forum_id');
            $table->string('topic');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('discussion_forums');
    }
}
