<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('un_described_cases', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('description');
            $table->foreignId('patient_id')->nullable()->onDelete('cascade')->constrained('patients');
            $table->foreignId('question_id')->nullable()->onDelete('cascade')->constrained('questions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('un_described_cases');
    }
};
