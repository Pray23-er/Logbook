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
        Schema::table('company_forms', function (Blueprint $table) {
            $table->dropForeign('company_forms_matric_number_foreign');
            $table->foreign('matric_number')->references('matric_number')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('company_forms', function (Blueprint $table) {
            $table->dropForeign('company_forms_matric_number_foreign');
            $table->foreign('matric_number')->references('matric_number')->on('students');
        });
    }
};
