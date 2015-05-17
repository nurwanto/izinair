<?php namespace IzinAir;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model {

	//
    protected $table = 'ppl_iair_pembayarans';
	public $timestamps = false;
	protected $fillable = [
		'id_izin',
        'jenis_izin',
        'bukti',
        'tanggal_pembayaran'
	];
}
