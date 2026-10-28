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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // Category
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();

            // Skin Type
            $table->foreignId('skin_type_id')->nullable()->constrained()->nullOnDelete();

            // Hair Type
            $table->foreignId('hair_type_id')->nullable()->constrained()->nullOnDelete();

            // Body Section
            $table->foreignId('body_section_id')->nullable()->constrained()->nullOnDelete();

            $table->string('name');
            $table->text('description');
            $table->decimal('price', 8, 2);

            $table->integer('stock')->default(0);

            $table->string('image');

            $table->decimal('rating', 2, 1)->default(0);

            $table->integer('reviews')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
