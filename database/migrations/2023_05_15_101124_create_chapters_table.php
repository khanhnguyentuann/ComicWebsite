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
        Schema::create('chapters', function (Blueprint $table) {
            $table->id('ChapterID');
            $table->integer('ChapterNumber');
            $table->unsignedBigInteger('ComicID');
            $table->timestamp('UploadDate')->useCurrent();
            $table->integer('PageCount')->nullable();

            $table->foreign('ComicID')->references('ComicID')->on('comics');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chaters');
    }
};