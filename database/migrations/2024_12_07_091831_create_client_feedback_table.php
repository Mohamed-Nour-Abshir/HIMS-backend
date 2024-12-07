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
        Schema::create('client_feedback', function (Blueprint $table) {
            $table->id();

            $table->string('client_name')->nullable();
            $table->string('client_image')->nullable();
            $table->string('client_designation')->nullable();
            $table->text('client_feedback')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_feedback');
    }
};
