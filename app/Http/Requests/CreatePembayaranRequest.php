<?php namespace IzinAir\Http\Requests;

use IzinAir\Http\Requests\Request;

class CreatePembayaranRequest extends Request {

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
			//
			'id_izin' => 'required',
	        'jenis_izin' => 'required',
	        'bukti' => 'required'
		];
	}

}