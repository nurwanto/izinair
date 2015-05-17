<?php namespace IzinAir;

use Illuminate\Database\Eloquent\Model;

class Form4 extends Model {

	//
    protected $table = 'ppl_iair_form4s';
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
                'profil',
                'berita',
                'dbmp',
                'lurah',
                'tanggal_diajukan'
	];

}
