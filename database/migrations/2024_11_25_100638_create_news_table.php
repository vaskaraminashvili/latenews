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
            $table->json('description')->nullable();
            $table->json('short_desc')->nullable();
            $table->string('video_link')->nullable();
            $table->foreignId('author_id')->constrained('users');
            $table->string('status');
            $table->timestamp('publish_date');
            $table->softDeletes();
            $table->timestamps();
            $table->index(['publish_date', 'deleted_at'], 'deleted_publish_date_index');
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
