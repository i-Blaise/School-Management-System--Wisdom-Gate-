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
            $table->string('date_of_admission');
            $table->string('student_image')->nullable();
            $table->string('dob'); //Date of Birth
            $table->string('place_of_birth')->nullable();
            $table->string('hometown');
            $table->string('nationality');
            $table->enum('gender', ['male', 'female']);
            $table->string('residence_address');
            $table->string('num_of_siblings')->nullable();
            $table->string('guardian1_id')->nullable();
            $table->string('guardian2_id')->nullable();
            $table->string('language1');
            $table->string('language2')->nullable();
            $table->string('language3')->nullable();
            $table->enum('living_with_both_parents', ['yes', 'no'])->nullable();
            $table->text('why_not_living_w_both_parents')->nullable();
            $table->string('hospital_born')->nullable();
            $table->string('Immunization_record')->nullable();
            $table->string('doctors_name')->nullable();
            $table->string('prefered_hospital')->nullable();
            $table->string('blood_group_type')->nullable();
            $table->text('allergy')->nullable();
            $table->enum('nhis', ['yes', 'no'])->nullable();
            $table->text('health_challenges')->nullable();
            $table->text('special_needs')->nullable();
            $table->string('our_ref')->nullable();
            $table->string('your_ref')->nullable();
            $table->text('headmaster_remarks')->nullable();
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
