<?php namespace IzinAir;

use Illuminate\Database\Eloquent\Model;

class Form3 extends Model {

		//
    protected $table = 'ppl_iair_form3s';
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
            'bplh',
            'tanggal_diajukan'
	];
}
