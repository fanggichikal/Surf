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
        Schema::create('surf_lessons', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('typeclass');
            $table->text('description_paragraph_1');
            $table->text('description_paragraph_2')->nullable();
            $table->text('description_paragraph_3')->nullable();
            $table->string('image_path')->nullable(); // Untuk logo TeampalTravel
            // Menyimpan harga pelajaran sebagai JSON string
            // Contoh format: [{"type": "Group lesson", "price": 500000}, {"type": "Semi private lesson", "price": 600000}]
            $table->json('lesson_prices')->nullable(); // atau ->default('[]');
            $table->foreignId('category_lesson_id')->nullable()->constrained('category_lessons')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surf_lessons');
        Schema::table('surf_lessons', function (Blueprint $table) {
            $table->dropForeign(['category_lesson_id']);
            $table->dropColumn('category_lesson_id');
        });
    }
};
