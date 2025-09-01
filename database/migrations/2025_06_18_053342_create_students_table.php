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
            // Linked user
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Student Details
            $table->string('name');
            $table->date('dob');
            $table->integer('age');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('joining_class');
            $table->text('address');
            $table->string('nationality');
            $table->string('blood_group')->nullable();
            $table->string('status')->nullable();
            $table->string('caste')->nullable();
            $table->string('language')->nullable();
            $table->string('category')->nullable(); // General, SC, ST, OBC, etc.
            $table->boolean('is_nri')->default(false);
            $table->boolean('has_sibling')->default(false);

            // Parent Details
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('father_education')->nullable();
            $table->string('mother_education')->nullable();
            $table->unsignedBigInteger('father_income')->nullable();
            $table->unsignedBigInteger('mother_income')->nullable();
            $table->text('father_address')->nullable();
            $table->text('mother_address')->nullable();

            // Documents (store file paths)
            $table->string('digital_sign')->nullable();
            $table->string('cast_certificate')->nullable();
            $table->string('income_certificate')->nullable();
            $table->string('addhar_certificate')->nullable();
            $table->string('birth_certificate')->nullable();
            $table->string('previous_marksheet')->nullable();
            $table->boolean('is_paid')->default(false);
            // Application Status
            $table->enum('application_status', ['pending', 'approved', 'rejected'])->default('pending');

            $table->timestamps();
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
