<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billets', function (Blueprint $table) {
            $table->bigIncrements('num_billet');
            $table->string('reference_reservation')->index();
            $table->unsignedBigInteger('num_client')->index();
            
        });



        Schema::table('billets', function($table) {
         
            $table->foreign('num_client')->references('num_client')->on('clients');
         
            $table->foreign('reference_reservation')->references('reference_reservation')->on('reservations');
    });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billets');
    }

}