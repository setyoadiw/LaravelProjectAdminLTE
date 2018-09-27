<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namadepan',25);
            $table->string('namabelakang',25);
            $table->string('email',25);
            $table->string('telp',25);
            $table->string('produk',25);
            $table->string('kuantitas',25);
            $table->string('alamat',25);
            $table->integer('totalbiaya');            
            $table->string('nomorinv');


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
        Schema::dropIfExists('invoices');
    }
}
