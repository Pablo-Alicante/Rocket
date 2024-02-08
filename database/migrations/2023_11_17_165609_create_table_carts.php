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
            $table->increments('id');
            $table->boolean('active');
            $table->integer('order_id');
            $table->integer('user_id');
            $table->integer('coupon_id')->nullable();
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
