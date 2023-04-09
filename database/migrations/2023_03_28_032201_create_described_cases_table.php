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
        Schema::create('described_cases', function (Blueprint $table) {
            $table->id();
            $table->string('image'); //path
            $table->text('diagnosis');
            $table->foreignID('patient_id')->nullable()->onDelete('cascade')->constrained('patients');
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
        Schema::dropIfExists('described_cases');
    }
};
