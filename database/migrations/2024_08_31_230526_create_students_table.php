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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('index')->unique();
            $table->string('first_name');
            $table->string('other_name')->nullable();
            $table->string('last_name');
            $table->string('class');
            $table->string('class_index');
            $table->string('student_image')->nullable();
            $table->string('dob'); //Date of Birth
            $table->string('date_of_admission');
            $table->string('nationality');
            $table->enum('gender', ['male', 'female']);
            $table->string('residence_address');
            $table->string('num_of_siblings')->nullable();
            $table->timestamps();

            // Add Health information to  this table ---- Headmasters Remarks Included----- Also update Child's Profile
            // Sibling and household members should be a different table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
