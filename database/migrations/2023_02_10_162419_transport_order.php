<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('transport_orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('client');
            $table->string('reference_number');
            $table->float('price');
            $table->string('currency');
            $table->string('truck');
            $table->date('loading_date');
            $table->date('unloading_date');
            $table->string('loading_address');
            $table->string('unloading_address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transport_order');
    }
};
