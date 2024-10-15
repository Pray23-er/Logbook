<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            
            $table->string('matric_number')->primary();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('course_of_study');
            $table->string('level');
            $table->string('year');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->timestamps();
            $table->foreignId('school_id')->constrained()->onDelete('cascade');
            $table->foreignId('company_id')->constrained()->onDelete('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
