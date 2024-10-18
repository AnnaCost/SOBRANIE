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
        Schema::create('Apartment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(column: 'id_dom');
            $table->foreign(columns: 'id_dom')->references('id')->on('Dom');
            $table->unsignedInteger(column: 'Apartment');
            $table->unsignedInteger(column: 'Numbers_owners');
            $table->unsignedInteger(column: 'Personal_account');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Apartment');
    }
};
