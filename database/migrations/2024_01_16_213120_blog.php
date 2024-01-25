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
        Schema::create('posts', function (Blueprint $table) {
            $table->string('bookid');
            $table->string('title');
            $table->text('summary');
            $table->string('author');
            $table->date('creationDate');
            $table->date('updateDate');
            $table->json('tags');
            $table->integer('commentsCount');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('posts');
    }
};
