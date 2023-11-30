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
            $table->id();
            $table->string('image')->default('app/public/avatar.png');
            $table->string('name')->default('user');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->integer('mobile')->nullable();
            $table->integer('whatsapp')->nullable();
            $table->string('my_calendar')->nullable();
            $table->string('company_calendar')->nullable();
            $table->string('description')->nullable();
            $table->string('address')->nullable();
            $table->enum('gender',['Male', 'Female', 'Other'])->default('Male');
            $table->enum('status', [0,1])->default(1);
            $table->rememberToken()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('add_by')->default(1);
            $table->timestamps();
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
