<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengaduanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pengaduan', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('id_izin');
			$table->string('jenis_izin');
			$table->string('isi');
			$table->timestamps('tanggal_pengaduan');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pengaduan');
	}

}
