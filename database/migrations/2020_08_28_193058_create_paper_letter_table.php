<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperLetterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paper_letter', function (Blueprint $table) {
            $table->integer("paper_id")->unsigned();
            $table->integer("letter_id")->unsigned();
            $table->date("date")->nullable();
            $table->string("note")->nullable();
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
        Schema::dropIfExists('paper_letter');
    }
}
