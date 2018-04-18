<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pname');
            $table->string('pquantity');
            $table->string('psize');
            $table->string('cname');
            $table->string('cphone');
            $table->string('date');
            $table->string('rnumber');
            $table->string('location');
            $table->string('advance');
            $table->integer('color_id')->unsigned();
            $table->integer('serial_id')->unsigned();
            $table->integer('token_id')->unsigned();
  $table->foreign('color_id')->references('id')->on('colors')
                ->onUpdate('cascade')->onDelete('cascade');

$table->foreign('serial_id')->references('id')->on('serials')
                ->onUpdate('cascade')->onDelete('cascade');

$table->foreign('token_id')->references('id')->on('tokens')
                ->onUpdate('cascade')->onDelete('cascade');




            


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
        Schema::dropIfExists('stocks');
    }
}
