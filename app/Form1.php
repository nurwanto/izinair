<?php namespace IzinAir;

use Illuminate\Database\Eloquent\Model;

class Form1 extends Model {
    protected $table = 'ppl_iair_form1s';
    public $timestamps = false;
	protected $fillable = [
		'telp',
                'email',
                'teknis',
                'bor',
                'keberatan',
                'konservasi',
                'alamat',
                'luas',
                'usaha',
                'tanggal_diajukan'
	];
}
