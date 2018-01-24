<?php

namespace MetodikaTI\Http\Requests\Back\Dashboard\System\User;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class EditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'nombre' => 'required|min:3',
            'email' => 'required|email|unique:users,email,'.base64_decode($this->route()->parameter('id')).',id',
            'password' => 'sometimes|min:8|confirmed'
        ];
    }
}
