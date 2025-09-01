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
        Schema::table('students', function (Blueprint $table) {
            $table->timestamp('exam_date')->nullable();
            $table->enum('exam_status', ['pending', 'scheduled', 'completed'])->default('pending');
            $table->enum('exam_result', ['pass', 'fail', 'pending'])->default('pending');
            $table->string('exam_venue')->nullable(); // Optional   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            //
        });
    }
};
