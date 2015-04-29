<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembayaranTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pembayaran', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('id_izin');
			$table->string('jenis_izin');
			$table->string('bukti');
			$table->timestamps('tanggal_pembayaran');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pembayaran');
	}

}
