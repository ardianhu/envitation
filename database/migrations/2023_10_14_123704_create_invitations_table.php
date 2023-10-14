<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('theme_id')->nullable();
            $table->unsignedBigInteger('gallery_id')->nullable();
            $table->unsignedBigInteger('story_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('theme_id')->references('id')->on('themes');
            $table->foreign('gallery_id')->references('id')->on('galleries');
            $table->foreign('story_id')->references('id')->on('stories');
            $table->string('title');
            $table->string('sub_title')->nullable();
            $table->string('location');
            $table->string('location_coordinate')->nulllable();
            $table->date('date');
            $table->time('time');
            $table->string('url');
            $table->string('music')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
