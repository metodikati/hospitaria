<?php namespace MetodikaTI\Http\Requests\Back\Dashboard\System\Profile;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Response;
use Auth;

class ProfileRequest extends FormRequest {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		//Se verifica que el usuario NO este logueado
		if (Auth::check()) {

			return true;

		} else {

			return false;

		}
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'nombre' => 'required|min:4|unique:user_profiles,name',
			'module' => 'required'
		];
	}

	/**
	 *
	 *
	 */
	public function response(array $errors)
	{
		$response = [
			'estatus' => false,
			'errors'  => $errors
		];

		if ($this->ajax() || $this->wantsJson())
		{
			return new JsonResponse($response, 200);
		}
	}

}
