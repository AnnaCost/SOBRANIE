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
        Schema::create('Meeting', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(column: 'dom_id');
            $table->foreign(columns: 'dom_id')->references('id')->on('Dom');
            $table->date(column: 'Date');
            $table->string(column: 'Initiator');
                 });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Meeting');
    }
};
