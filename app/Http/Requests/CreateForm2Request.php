<?php namespace IzinAir\Http\Requests;

use IzinAir\Http\Requests\Request;

class CreateForm2Request extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'id_penduduk' => 'required',
			'telp' => 'required',
            'email' => 'required',
            'akta' => 'required',
            'no_imb' => 'required',
            'surat_tanah' => 'required',
            'domisili' => 'required',
            'keberatan' => 'required',
            'pelestarian' => 'required',
            'no_pbb' => 'required',
            'teknis' => 'required',
            'dbmp' => 'required',
            'lurah' => 'required',
		];
	}

}
