<?php namespace IzinAir;

use Illuminate\Database\Eloquent\Model;

class PermohonanPerpanjangan extends Model {

	//
    protected $table = 'ppl_iair_permohonan_perpanjangans';
	public $timestamps = false;
	protected $fillable = [
			'id_izin',
            'jenis_ajuan',
            'tanggal_ajuan'
	];
}
