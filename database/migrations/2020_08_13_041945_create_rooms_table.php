<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('room_id');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('client_id')->on('clients')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('room_type_id');
            $table->foreign('room_type_id')->references('room_type_id')->on('room_types')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('service_id')->on('services')->onDelete('cascade')->onUpdate('cascade');
            $table->string('room_code');
            $table->double('room_price');
            $table->string('size');
            $table->string('capacity');
            $table->string('bed');
            $table->string('payment_number');
            $table->string('payment_account_number');
            $table->string('payment_contact_person');
            $table->integer('status');
            $table->softDeletes();
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
        Schema::dropIfExists('rooms');
    }
}
