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
            $table->string('siblings_name')->nullable()->after('language');
            $table->string('siblings_class')->nullable()->after('siblings_name');
            $table->string('siblings_rollno')->nullable()->after('siblings_class');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn(['siblings_name', 'siblings_class', 'siblings_rollno']);
        });
    }
};
