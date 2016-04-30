<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukEdukasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('produkEdukasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idMerchant',10)->unsigned();
            $table->string('title');
            $table->string('desc');
            $table->string('street');
            $table->string('village');
            $table->string('city');
            $table->string('prov');
            $table->string('zipCode');
            $table->string('dateOrdered');
            $table->string('quota');
            $table->string('price');
            $table->rememberToken();
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
        Schema::drop('produkEdukasi');
    }
}
