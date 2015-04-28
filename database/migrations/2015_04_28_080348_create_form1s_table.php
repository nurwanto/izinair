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
			$table->string('telp');
            $table->string('email');
            $table->string('teknis');
            $table->string('bor');
            $table->string('keberatan');
            $table->string('konservasi');
            $table->string('alamat');
            $table->string('luas');
            $table->string('usaha');
			$table->timestamps();
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
