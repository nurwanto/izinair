<?php namespace IzinAir\Http\Requests;

use IzinAir\Http\Requests\Request;

class CreateForm3Request extends Request {

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
            'bplh' => 'required'
		];
	}

}
