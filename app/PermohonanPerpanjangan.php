<?php namespace IzinAir;

use Illuminate\Database\Eloquent\Model;

class PermohonanPerpanjangan extends Model {

	//
	protected $fillable = [
			'id_izin',
            'jenis_ajuan'
	];
}
