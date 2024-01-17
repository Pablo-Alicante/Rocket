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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->text('uuid')->unique();
            $table->boolean('active');
            $table->integer('order_id');
            $table->integer('user_id');
            $table->integer('coupon_id');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations. //
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
