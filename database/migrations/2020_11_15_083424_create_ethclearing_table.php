<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEthclearingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ethclearing', function (Blueprint $table) {
            $table->id();
            $table->string('billoflading');
            $table->date('registereddate');
            $table->date('dti');
            $table->date('sendingtocustom');
            $table->date('customprocessstart');
            $table->date('transitpermitted');
            $table->date('sendingtodjbouti');
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
        Schema::dropIfExists('ethclearing');
    }
}
