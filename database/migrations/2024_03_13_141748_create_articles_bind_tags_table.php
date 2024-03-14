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
        Schema::create('articles_bind_tags', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('article_id');
            $table->unsignedBigInteger('tag_id');

            $table->index('article_id', 'article_tag_article_idx');
            $table->index('tag_id', 'article_tag_tag_idx');

            $table->foreign('article_id', 'article_tag_article_fk')->on('articles')->references('id');
            $table->foreign('tag_id', 'article_tag_tag_fk')->on('articles_tags')->references('id');

            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles_bind_tags');
    }
};
