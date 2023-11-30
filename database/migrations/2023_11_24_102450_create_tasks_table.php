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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            
            //$table->foreignId('caseworker_id')->constrained();
            //$table->foreignId('task_status_id')->constrained();
            //$table->foreignId('priority_id')->constrained();
            $table->integer('assigned_to');

            $table->enum('related_to',['General','Leads','Contacts','Matters']);
            $table->integer('related_to_id');
            $table->integer('add_by')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
