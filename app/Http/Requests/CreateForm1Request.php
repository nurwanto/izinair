<?php namespace IzinAir\Http\Requests;

use IzinAir\Http\Requests\Request;

class CreateForm1Request extends Request {

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
            'email' => 'required | email',
            'teknis' => 'required',
            'bor' => 'required',
            'keberatan' => 'required',
            'konservasi' => 'required',
            'alamat' => 'required',
            'luas' => 'required',
            'usaha' => 'required'
		];
	}

}
