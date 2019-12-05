<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reference_reservation',8)->index();

            $table->unsignedBigInteger('num_client')->index();


        });
        Schema::table('reservation_clients', function($table) 
        {
            $table->foreign('reference_reservation')->references('reference_reservation')->on('reservations');
            $table->foreign('num_client')->references('num_client')->on('clients');



        });






    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_clients');
    }
}
