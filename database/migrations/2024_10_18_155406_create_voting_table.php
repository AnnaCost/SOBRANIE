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
        Schema::create('Voting', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(column: 'name_owner_id');
            $table->foreign(columns: 'name_owner_id')->references('id')->on('Owners');
            $table->unsignedBigInteger(column: 'questions_id');
            $table->foreign(columns: 'questions_id')->references('id')->on('Questions');
            $table->unsignedInteger(column: 'Result');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Voting');
    }
};
