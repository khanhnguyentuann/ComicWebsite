<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('user_comics', function (Blueprint $table) {
            $table->id('UserComicID');
            $table->unsignedBigInteger('UserID');
            $table->unsignedBigInteger('ComicID');
            $table->unsignedBigInteger('LastReadChapterID')->nullable();

            $table->foreign('UserID')->references('UserID')->on('users');
            $table->foreign('ComicID')->references('ComicID')->on('comics');
            $table->foreign('LastReadChapterID')->references('ChapterID')->on('chapters');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_comics');
    }
};