<?php namespace IzinAir;

use Illuminate\Database\Eloquent\Model;

class Form2 extends Model {

		//
	public $timestamps = false;
	protected $fillable = [
		'telp',
                'email',
                'akta',
                'no_imb',
                'surat_tanah',
                'domisili',
                'keberatan',
                'pelestarian',
                'no_pbb',
                'teknis',
                'dbmp',
                'lurah',
                'tanggal_diajukan'
	];
}
