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
        Schema::create('comics', function (Blueprint $table) {
            $table->id('ComicID');
            $table->string('ComicName');
            $table->text('Description')->nullable();
            $table->unsignedBigInteger('AuthorID');
            $table->string('Genre')->nullable();
            $table->string('Status')->nullable();
            $table->timestamp('UploadDate')->useCurrent();
            $table->string('ThumbnailImage')->nullable();

            $table->foreign('AuthorID')->references('AuthorID')->on('authors');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};