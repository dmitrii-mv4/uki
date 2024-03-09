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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('phone');
            $table->string('email');
            $table->text('content');
            $table->boolean('status')->default(0);
            $table->timestamps();

            $table->softDeletes();

            $table->unsignedBigInteger('feedback_forms_id')->nullable();
            $table->index('feedback_forms_id', 'feedback_forms_id_idx');
            $table->foreign('feedback_forms_id', 'feedback_forms_id_fk')->on('feedback_forms')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
