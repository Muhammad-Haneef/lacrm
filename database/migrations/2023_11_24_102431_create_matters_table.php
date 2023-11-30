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
        Schema::create('matters', function (Blueprint $table) {
            $table->id();
            $table->string('matter_number');
            
            $table->string('description', 2500);
            $table->integer('originated_by');
            $table->string('location');
            
            $table->foreignId('lead_id')->constrained();
            
            //$table->integer('caseworker_id')->unsigned();          
            
            //$table->integer('area_of_law_id')->unsigned();
            //$table->foreignId('area_of_law_id');
            
            //$table->integer('matter_status_id')->unsigned();
            //$table->foreignId('matter_status_id')->constrained();

            //$table->integer('priority_id')->unsigned();
            //$table->foreignId('priority_id')->constrained();

            $table->date('open_date');
            $table->date('close_date');
            $table->date('limitation_date');
            $table->integer('add_by')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matters');
    }
};
