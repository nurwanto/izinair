<?php namespace IzinAir;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model {

	//
	public $timestamps = false;
	protected $fillable = [
		'NIP',
		'nama',
        'username',
        'password',
        'tanggal_daftar'
	];

}
