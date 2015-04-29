<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pegawais', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('NIP');
			$table->string('nama');
			$table->string('username');
			$table->string('password');
			$table->string('role')->default('pegawai');
			$table->timestamp('tanggal_daftar');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pegawais');
	}

}
