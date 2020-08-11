<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booked', function (Blueprint $table) {
            $table->bigIncrements('booking_id');
            $table->integer('customer_phone_number');
            $table->string('customer_id');
            $table->date('customer_check_in');
            $table->date('customer_check_out');
            $table->string('guest');
            $table->integer('room_id');


            // $table->unsignedBigInteger('client_id');
            // $table->foreign('client_id')->references('client_id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            // $table->unsignedBigInteger('service_id');
            // $table->foreign('service_id')->references('service_id')->on('services')->onDelete('cascade')->onUpdate('cascade');
            // // $table->unsignedBigInteger('booking_categorty_id');
            // // $table->foreign('booking_categorty_id')->references('booking_categorty_id')->on('booking_category')->onDelete('cascade')->onUpdate('cascade');
            // $table->string('booking_item');
            // $table->Integer('booking_quantity');
            // $table->float('booking_unit_price');
            // $table->float('booking_total_price');
            // $table->float('booking_vat');
            // $table->boolean('booking_paid_status');
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
        Schema::dropIfExists('booking');
    }
}
