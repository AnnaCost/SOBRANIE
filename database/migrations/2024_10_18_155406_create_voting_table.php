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
            $table->unsignedBigInteger(column: 'id_name_owner');
            $table->foreign(columns: 'id_name_owner')->references('id')->on('Owners');
            $table->unsignedBigInteger(column: 'id_questions');
            $table->foreign(columns: 'id_questions')->references('id')->on('Questions');
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
