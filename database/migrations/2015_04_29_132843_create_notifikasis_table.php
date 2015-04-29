<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotifikasisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notifikasis', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_izin');
			$table->string('jenis_izin');
			$table->string('isi');
			$table->timestamp('tanggal_notifikasi');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('notifikasis');
	}

}
