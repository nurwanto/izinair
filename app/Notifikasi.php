<?php namespace IzinAir;

use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model {

	//
    protected $table = 'ppl_iair_notifikasis';
	public $timestamps = false;
	protected $fillable = [
		'id_izin',
        'jenis_izin',
        'isi',
        'status',
        'tanggal_notifikasi'
	];

}
