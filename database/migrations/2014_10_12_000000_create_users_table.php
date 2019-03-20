<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->default('---');
            $table->string('lastname')->default('---');
            $table->string('svnr')->default('---');
            $table->string('boss')->default('---');
            $table->string('street')->default('---');
            $table->string('town')->default('---');
            $table->string('date1')->default('---');
            $table->string('date2')->default('---');
            $table->string('date3')->default('---');
            $table->string('date4')->default('---');
            $table->string('date5')->default('---');
            $table->string('date6')->default('---');
            $table->string('date7')->default('---');
            $table->string('date8')->default('---');
            $table->string('date9')->default('---');
            $table->string('date10')->default('---');
            $table->integer('billnumber')->default('0');
            $table->boolean('ready')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
