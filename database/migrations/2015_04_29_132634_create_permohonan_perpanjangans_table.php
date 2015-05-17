<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermohonanPerpanjangansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ppl_iair_permohonan_perpanjangans', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_izin');
			$table->string('jenis_izin');
			$table->timestamp('tanggal_ajuan');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ppl_iair_permohonan_perpanjangans');
	}

}
