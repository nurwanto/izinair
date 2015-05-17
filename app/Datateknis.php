<?php namespace IzinAir;

use Illuminate\Database\Eloquent\Model;

class Datateknis extends Model {

	//
    protected $table = 'ppl_iair_datateknis';
	public $timestamps = false;
	protected $fillable = [
		'id_izin',
        'jenis_izin',
        'data',
        'tanggal_data'
	];
}
