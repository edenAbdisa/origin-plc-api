<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->id();
            $table->date('docrecieveddate');
            $table->string('operationnumber');
            $table->string('customername');
            $table->string('email');
            $table->string('billoflading');
            $table->string('declarationnumber');
            $table->string('vessel');
            $table->string('shippingline');
            $table->string('portofloading');
            $table->integer('package');
            $table->float('weightofcargo');
            $table->date('estimatedtimearrival');
            $table->date('actualtimearrival');
            $table->date('dispatcheddate');
            $table->date('arrivalatdryport');
            $table->date('cargodischarging');
            $table->date('finaldeclarationissued');
            $table->float('paymenteffected');
            $table->boolean('finaldeclarationdelivered');
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
        Schema::dropIfExists('item');
    }
}
