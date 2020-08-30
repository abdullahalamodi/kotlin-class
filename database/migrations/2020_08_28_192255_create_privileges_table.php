<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivilegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paper_user', function (Blueprint $table) {
            $table->integer("paper_id")->unsigned();
            $table->integer("employee_id")->unsigned();
            $table->integer("role")->nullable();
            $table->string("period")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('paper_employee');
    }
}
