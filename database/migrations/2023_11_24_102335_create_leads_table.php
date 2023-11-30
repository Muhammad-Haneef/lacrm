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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->enum('lead_type',[0,1]); // 0 = lead and 1 = client
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('mobile');
            $table->string('adderss');
            $table->string('short_note', 2000);
            $table->string('tags');
            $table->integer('add_by')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
