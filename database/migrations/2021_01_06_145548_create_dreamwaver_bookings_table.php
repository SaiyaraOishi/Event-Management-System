<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDreamwaverBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dreamwaver_bookings', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('email');
            $table->text('phone');
            $table->date('date');
            $table->text('time');
            $table->text('service_provider_name');
            $table->text('details');
            $table->text('status');
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
        Schema::dropIfExists('dreamwaver_bookings');
    }
}
