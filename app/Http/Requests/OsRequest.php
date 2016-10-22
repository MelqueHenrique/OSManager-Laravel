<?php namespace osmanager\Http\Requests;

use osmanager\Http\Requests\Request;

class OsRequest extends Request {

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
			'nome' => 'required|max:250|min:3',
			'email' => 'required|email',
			'preco' => 'required|integer|min:0',
			'descricao' => 'required|max:250'
		];
	}

	public function messages(){
		return [
			'required' => 'O campo :attribute precisa ser preenchido',
			'nome.max' => 'O campo :attribute não pode ultrapassar :max caracteres',
			'max' => 'O campo :attribute não pode ultrapassar :max',
			'nome.min' => 'O campo :attribute não pode ter menos de :min caracteres',
			'min' => 'O campo :attribute não pode ser menor que :min',
			'email' => 'O valor digitado em :attribute não parece ser um e-mail',
			'between' => 'O valor de :attribute precisa estar entre 0 e 100.000'
		];
	}
}
