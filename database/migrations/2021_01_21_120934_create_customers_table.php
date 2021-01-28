<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblcustomers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tbloperation_id')->constrained(); 
            $table->string('name');  
            $table->string('folio', 30);
            $table->boolean('attended');              
            $table->timestamps();

            //$table->foreign('idOperation')->references('idOperation')->on('tbloperations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblcustomers');
    }
}
