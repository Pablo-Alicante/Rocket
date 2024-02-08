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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->text('uuid')->unique();
            $table->enum('role', ['admin', 'customer'])->default('customer');
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at');
            $table->string('password');
            $table->string('phone');
            $table->string('address');
            $table->date('birthday');
            $table->boolean('active')->default(true);
            $table->boolean('unsubscribe')->default(false);
            $table->timestamp('unsubscribe_at')->nullable();
            $table->timestamp('login_at');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
