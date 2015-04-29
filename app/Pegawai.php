<?php namespace IzinAir;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model {

	//
	protected $fillable = [
		'NIP',
		'nama',
        'username',
        'password'
	];

}
