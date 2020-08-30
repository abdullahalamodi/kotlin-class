<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLetterDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_department', function (Blueprint $table) {
            $table->integer("letter_id")->unsigned();
            $table->integer("from_id")->unsigned();
            $table->integer("to_id")->unsigned();
            $table->date("date")->nullable();
            $table->text("discription")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('letter_department');
    }
}
