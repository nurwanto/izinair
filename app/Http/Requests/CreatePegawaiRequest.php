<?php namespace IzinAir\Http\Requests;

use IzinAir\Http\Requests\Request;

class CreatePegawaiRequest extends Request {

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
			'nama' => 'required',
			'username' => 'required',
			'password' => 'required'
		];
	}

}
