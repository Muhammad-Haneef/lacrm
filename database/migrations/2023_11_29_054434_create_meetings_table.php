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
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            
            $table->string('subject', 1000);
            $table->string('agenda', 2500);

            $table->dateTime('start_at');
            $table->dateTime('end_at');

            $table->string('location', 2500);

            $table->integer('related_to_id');
            $table->enum('related_to',['General','Leads','Contacts','Matters'])->default('General');
        
            $table->integer('add_by')->default(1);
            //$table->foreignId('attendies');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meetings');
    }
};
