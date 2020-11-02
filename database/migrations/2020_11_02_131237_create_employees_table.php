<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome');
            $table->string('cargo');
            $table->string('email');
            $table->string('telefone');
            $table->date('admissao');

            $table->timestamps();
        });

        Schema::table('employees', function (Blueprint $table) {

        $table->unsignedInteger('companies_id');
        $table->foreign('companies_id')->references('id')->on('companies');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
