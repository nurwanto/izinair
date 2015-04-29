<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembayaransTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pembayarans', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_izin');
			$table->string('jenis_izin');
			$table->string('bukti');
			$table->timestamp('tanggal_pembayaran');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pembayarans');
	}

}
