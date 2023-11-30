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
        Schema::table('leads', function (Blueprint $table) {
            $table->foreignId('organization_id')->after('id')->constrained();
            $table->foreignId('lead_status_id')->after('short_note')->constrained();
            $table->foreignId('lead_source_id')->after('short_note')->constrained();
            $table->foreignId('area_of_law_id')->after('short_note')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            //
        });
    }
};
