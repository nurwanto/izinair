<?php namespace IzinAir;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model {

	//
	protected $fillable = [
		'id_izin',
        'jenis_izin',
        'bukti'
	];
}
