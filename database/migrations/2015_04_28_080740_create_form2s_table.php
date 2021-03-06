<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForm2sTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ppl_iair_form2s', function(Blueprint $table)
		{
			$table->string('NIK');
			$table->increments('id');
			$table->string('telp');
            $table->string('email');
            $table->string('akta');
            $table->string('no_imb');
            $table->string('surat_tanah');
            $table->string('domisili');
            $table->string('keberatan');
            $table->string('pelestarian');
            $table->string('no_pbb');
            $table->string('teknis');
            $table->string('dbmp');
            $table->string('lurah');
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
		Schema::drop('ppl_iair_form2s');
	}

}
