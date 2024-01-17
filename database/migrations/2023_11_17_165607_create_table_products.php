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
            $table->text('uuid')->unique();
            $table->integer('category_id');
            $table->string('name');
            $table->string('description');
            $table->integer('model_id');
            $table->decimal('price');
            $table->integer('stock');
            $table->boolean('avalaible');
            $table->integer('image_id');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
