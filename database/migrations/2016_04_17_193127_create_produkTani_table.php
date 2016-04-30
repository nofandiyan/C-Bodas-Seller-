<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukTaniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produkTani', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idMerchant',10)->unsigned();
            $table->string('title');
            $table->string('desc');
            $table->string('stock');
            $table->string('massStock');
            $table->string('price');
            $table->string('massSell');
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
        Schema::drop('produkTani');
    }
}
