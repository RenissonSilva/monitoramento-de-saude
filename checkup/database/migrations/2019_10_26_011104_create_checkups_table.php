<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('data_checkup');
            $table->float('peso',3,1);
            $table->float('altura',3,2);
            $table->text('pressao');
            $table->integer('glicose');
            $table->float('colesterol_LDL',3,1);
            $table->float('colesterol_HDL',3,1);
            $table->text('observacoes');
            $table->unsignedBigInteger('user_id')->nullable();
            
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('checkups');
    }
}
