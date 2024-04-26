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
        Schema::create('containers', function (Blueprint $table) {
            $table->id();
            $table->string('vessel_type');
            $table->string('vessel_name');
            $table->string('schedule');
            $table->string('call_sign');
            $table->string('voyage_in_out');
            $table->dateTime('eta');
            $table->integer('loa');
            $table->decimal('draft');
            $table->string('agent');
            $table->integer('disch');
            $table->integer('load');
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('containers');
    }
};
