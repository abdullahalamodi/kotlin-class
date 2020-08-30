<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutterDerpartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outterDepartments', function (Blueprint $table) {
            $table->increments("id");
            $table->string("office_manager")->nullable();
            $table->string("address")->nullable();
            $table->string("email")->nullable();
            $table->integer("department_id")->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outterDepartments');
    }
}
