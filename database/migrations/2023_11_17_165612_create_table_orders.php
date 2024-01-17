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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->text('uuid')->unique();
            $table->integer('user_id');
            $table->text('user_name');
            $table->text('user_surname');
            $table->text('user_email');
            $table->text('user_phone');
            $table->text('user_comments')->nullable();
            $table->text('user_address');
            $table->text('user_city');
            $table->text('user_zipcode');
            $table->text('user_country');
            $table->foreignId('cart_id');
            $table->foreignId('coupon_id')->nullOnDelete();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
