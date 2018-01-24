<?php

namespace MetodikaTI\Http\Requests\Back\Dashboard\Catalog\Event;

use Illuminate\Foundation\Http\FormRequest;

class EeventRequest extends FormRequest
{
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
            'titulo' => 'required|min:3',
            'descripcion' => 'required',
            'fechaInicio' => 'required|date',
            'fechaTermino' => 'required|date|after_or_equal:fechaInicio',
            'imagen' => 'required|image'
        ];
    }
}
