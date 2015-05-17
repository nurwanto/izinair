<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatateknisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ppl_iair_datateknis', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_izin');
			$table->string('jenis_izin');
			$table->string('data');
			$table->timestamp('tanggal_data');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ppl_iair_datateknis');
	}

}
