<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConnectLoggerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connect_logger', function (Blueprint $table) {
            $table->increments('id');
            $table->string('from')->nullable();
            $table->string('sid')->nullable();
            $table->string('to')->nullable();
            $table->string('visitor')->nullable();
            $table->string('type')->nullable();
            $table->string('created_at');
            $table->string('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('connect_logger');
    }
}
