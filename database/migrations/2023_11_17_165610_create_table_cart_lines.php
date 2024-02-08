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
        Schema::create('cart_lines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cart_id');
            $table->integer('product_id');
            $table->integer('units');
            $table->float('total_base_price');
            $table->float('total_tax');
            $table->float('total_price');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cart_lines');
    }
};
