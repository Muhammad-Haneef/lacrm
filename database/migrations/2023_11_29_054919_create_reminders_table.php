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
        Schema::create('reminders', function (Blueprint $table) {
            $table->id();
            
            $table->dateTime('reminding_date')->nullable();
            $table->string('description', 2500);
        
            $table->integer('related_to_id');
            $table->enum('related_to',['General','Leads','Contacts','Matters'])->default('General');
        
            $table->integer('add_by')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reminders');
    }
};
