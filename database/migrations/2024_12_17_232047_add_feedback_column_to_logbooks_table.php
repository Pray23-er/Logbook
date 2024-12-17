<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddFeedbackColumnToLogbooksTable extends Migration
{
    public function up()
    {
        Schema::table('logbooks', function (Blueprint $table) {
            $table->text('feedback')->nullable();
        });
    }

    public function down()
    {
        Schema::table('logbooks', function (Blueprint $table) {
            $table->dropColumn('feedback');
        });
    }
}
