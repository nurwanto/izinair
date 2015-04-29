<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotifikasiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notifikasi', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('id_izin');
			$table->string('jenis_izin');
			$table->string('isi');
			$table->timestamps('tanggal_notifikasi');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('notifikasi');
	}

}
