<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternshipListingsTable extends Migration
{
    public function up()
    {
        Schema::create('internship_listings', function (Blueprint $table) {
            $table->id('internship_id');
            $table->string('title');
            $table->string('company_name');
            $table->string('location')->nullable();
            $table->text('description')->nullable();
            $table->string('category')->nullable();
            $table->date('application_deadline')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('internship_listings');
    }
}