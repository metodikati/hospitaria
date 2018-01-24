<?php

namespace MetodikaTI\Http\Requests\Back\Dashboard\Catalog\HomeSlider;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            'slider' => 'sometimes|image',
            'orden' => 'required|numeric|unique:sliders,order,'.base64_decode($this->route()->parameter('id')).',id',
            'etiquetaAlt' => 'required'
        ];
    }
}
