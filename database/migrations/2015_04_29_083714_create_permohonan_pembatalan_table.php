<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermohonanPembatalanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permohonanpembatalan', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('id_izin');
			$table->string('jenis_izin');
			$table->timestamps('tanggal_ajuan');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('permohonanpembatalan');
	}

}
