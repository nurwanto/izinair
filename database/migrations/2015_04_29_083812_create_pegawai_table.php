<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pegawai', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama');
			$table->string('username');
			$table->string('password');
			$table->timestamps('tanggal_daftar');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pegawai');
	}

}
