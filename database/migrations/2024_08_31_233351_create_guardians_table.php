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
        Schema::create('guardians', function (Blueprint $table) {
            $table->id();
            $table->string('ward_index');
            $table->enum('title', ['Mr.', 'Mrs', 'Miss', 'Dr.', 'Prof.']);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('hometown')->nullable();
            $table->string('nationality')->nullable();
            $table->string('occupation')->nullable();
            $table->string('employer')->nullable();
            $table->string('employer_address')->nullable();
            $table->enum('education_level', ['None', 'Primary', 'JHS', 'SHS', 'Diploma', 'Bachelors', 'Masters', 'PHD'])->default('None');
            $table->string('residence_address');
            $table->string('phone_number1');
            $table->string('phone_number2')->nullable();
            $table->string('email')->nullable();
            $table->string('relation_to_ward');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guardians');
    }
};
