<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChequeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheque', function (Blueprint $table) {
            $table->id();
            $table->integer('User_id');
            $table->bigInteger('cheque_No');
            $table->string('Bank_Name');
            $table->string('Amount')->nullable();
            $table->boolean('Manger_Aproved')->nullable();
            $table->boolean('Senior_Aproved')->nullable();
            $table->boolean('Printed')->nullable();
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
        Schema::dropIfExists('cheques');
    }
}
