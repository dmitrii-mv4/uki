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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->boolean('is_published')->default(1);
            $table->text('image');
            $table->timestamps();

            $table->softDeletes();

            $table->unsignedBigInteger('articles_category_id')->nullable();
            $table->index('articles_category_id', 'articles_category_idx');
            $table->foreign('articles_category_id', 'articles_category_fk')->on('articles_categories')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
