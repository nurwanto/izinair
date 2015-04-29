<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForm1sTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('form1s', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('NIK');
			$table->string('telp');
            $table->string('email')->unique();
            $table->string('teknis');
            $table->string('bor');
            $table->string('keberatan');
            $table->string('konservasi');
            $table->string('alamat');
            $table->string('luas');
            $table->string('usaha');
			$table->timestamp('tanggal_diajukan');
			// $table->nullableTimestamps('tanggalterima_tolak');
			$table->string('status')->default('diajukan');
			$table->integer('jangka_waktu')->default(null)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('form1s');
	}

}
