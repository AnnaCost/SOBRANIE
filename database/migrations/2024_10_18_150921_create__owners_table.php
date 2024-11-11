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
        Schema::create('Owners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(column: 'apartment_id');
            $table->foreign(columns: 'apartment_id')->references('id')->on('Apartment');
            $table->string(column: 'Name_owner');
            $table->unsignedInteger(column: 'Ownership_interest');
            $table->string(column: 'Password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Owners');
    }
};
