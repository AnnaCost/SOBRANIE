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
        Schema::create('Questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(column: 'id_meeting');
            $table->foreign(columns: 'id_meeting')->references('id')->on('Meeting');
            $table->text(column: 'Questions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Questions');
    }
};
