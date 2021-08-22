<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// checkIN,checkOUT,adults,children,roomType,Email,Phone
class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->timestamps();
            $table->date('checkIn');
            $table->date('checkOut');
            $table->integer('adults');
            $table->integer('children');
            $table->string('roomType');
            $table->string('name');
            $table->string('phone');
            $table->string('status')->default('U obradi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation');
    }
}