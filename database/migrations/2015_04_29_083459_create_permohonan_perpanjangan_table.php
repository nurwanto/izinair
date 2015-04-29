<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermohonanPerpanjanganTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permohonanperpanjangan', function(Blueprint $table)
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
		Schema::drop('permohonanperpanjangan');
	}

}
