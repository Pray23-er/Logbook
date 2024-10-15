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
        Schema::create('company_forms', function (Blueprint $table) {
            $table->id();
            $table->string('companyname');
            $table->string('Company_phone_number');
            $table->string('Company_email');
            $table->string('Added_by');
            $table->string('matric_number');
            $table->string('status')->default('pending');
            $table->timestamps();

            $table->foreign('matric_number')->references('matric_number')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_forms');
    }
};
