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
        Schema::create('comments', function (Blueprint $table) {
            $table->id('CommentID');
            $table->unsignedBigInteger('UserID');
            $table->unsignedBigInteger('ComicID')->nullable();
            $table->unsignedBigInteger('ChapterID')->nullable();
            $table->text('CommentText');
            $table->timestamp('CommentDate')->useCurrent();

            $table->foreign('UserID')->references('UserID')->on('users');
            $table->foreign('ComicID')->references('ComicID')->on('comics');
            $table->foreign('ChapterID')->references('ChapterID')->on('chapters');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};