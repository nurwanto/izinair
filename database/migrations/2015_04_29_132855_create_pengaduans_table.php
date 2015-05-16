<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengaduansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ppl_izinair_pengaduans', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_izin');
			$table->string('jenis_izin');
			$table->string('isi');
			$table->timestamp('tanggal_pengaduan');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pengaduans');
	}

}
