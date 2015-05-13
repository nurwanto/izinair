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
        'role',
        'tanggal_daftar'
	];

}
