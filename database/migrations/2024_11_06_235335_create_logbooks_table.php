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
        Schema::create('logbooks', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->string('description');
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
        Schema::table('logbooks', function (Blueprint $table) {
            $table->dropForeign('logbooks_matric_number_foreign');
        });

        Schema::dropIfExists('logbooks');
    }
};
