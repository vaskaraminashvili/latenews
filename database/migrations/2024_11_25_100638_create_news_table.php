<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->string('slug');
            $table->json('description');
            $table->json('short_desc');
            $table->string('video_link');
            $table->foreignId('author_id')->constrained('users');
            $table->string('status');
            $table->timestamp('publish_date');
            $table->timestamp('deleted_at');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }

};
