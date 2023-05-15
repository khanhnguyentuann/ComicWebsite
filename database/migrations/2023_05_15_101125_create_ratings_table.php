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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id('RatingID');
            $table->unsignedBigInteger('UserID');
            $table->unsignedBigInteger('ComicID');
            $table->integer('RatingScore')->nullable();

            $table->foreign('UserID')->references('UserID')->on('users');
            $table->foreign('ComicID')->references('ComicID')->on('comics');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};