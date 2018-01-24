<?php

namespace MetodikaTI\Http\Requests\Back\Dashboard\Blog\News;

use Illuminate\Foundation\Http\FormRequest;

class CreateNewsRequest extends FormRequest
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
            'titulo'            => 'required|min:3',
            'palabras_clave'    => 'required|min:5',
            'meta_descripcion'  => 'required|min:5|max:70',
            'texto'             => 'required|min:10',
            'estatus'           => 'required',
            'categoria'         => 'required|exists:news_categories,id',
            'publicarlo'        => 'required|date',
            'main_image'        => 'required|image|mimes:jpg,jpeg,png',
            'alt_main_image'    => 'required|image|mimes:jpg,jpeg,png',
            'post_image'        => 'required|image|mimes:jpg,jpeg,png',
            'alt_post_image'    => 'required|image|mimes:jpg,jpeg,png',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'titulo.required'           => 'Se requiere un titulo.',
            'titulo.min'                => 'El titulo debe contener por lo menos 3 caracteres.',

            'palabras_clave.required'   => 'Se requiere una lista de palabras clave separadas por coma (,).',
            'palabras_clave.min'        => 'Se requiere que por lo menos haya una palabra clave de 5 caracteres.',

            'meta_descripcion.required' => 'Se requiere que indique una metadescripción.',
            'meta_descripcion.min'      => 'Se requiere que la metadescripción tenga minimo 5 y maximo 70 caracteres.',
            'meta_descripcion.max'      => 'Se requiere que la metadescripción tenga minimo 5 y maximo 70 caracteres.',

            'texto.required'            => 'Se requiere que indique el texto del mensaje.',
            'texto.min'                 => 'Se requiere que el texto tenga minimo 10 caracteres.',

            'estatus.required'          => 'Se requiere que seleccione el estatus.',

            'categoria.required'        => 'Se requiere que seleccione una categoria.',
            'categoria.exists'          => 'La categoria seleccionada no se encuentra registada en el catálogo de categorias.',

            'publicarlo.required'       => 'Se requiere que seleccione una fecha de publicación.',
            'publicarlo.date'           => 'La fecha de publicación debe ser una fecha válida.',
            'publicarlo.before'         => 'La fecha de publicación debe ser posterior a la fecha de hoy.',

            'main_image.required'       => 'Se requiere una imagen principal.',
            'main_image.image'          => 'Se requiere que la imagen principal sea una imagen valida en formato jpg o png.',
            'main_image.mimes'          => 'Se requiere que la imagen principal sea una imagen valida en formato jpg o png.',

            'alt_main_image.required'   => 'Se requiere una imagen principal alterna.',
            'alt_main_image.image'      => 'Se requiere que la imagen principal alterna sea una imagen valida en formato jpg o png.',
            'alt_main_image.mimes'      => 'Se requiere que la imagen principal alterna sea una imagen valida en formato jpg o png.',

            'post_image.required'       => 'Se requiere una imagen de post.',
            'post_image.image'          => 'Se requiere que la imagen de post sea una imagen valida en formato jpg o png.',
            'post_image.mimes'          => 'Se requiere que la imagen de post sea una imagen valida en formato jpg o png.',

            'alt_post_image.required'   => 'Se requiere una imagen de post alterna.',
            'alt_post_image.image'      => 'Se requiere que la imagen de post alterna sea una imagen valida en formato jpg o png.',
            'alt_post_image.mimes'      => 'Se requiere que la imagen de post alterna sea una imagen valida en formato jpg o png.',
        ];
    }    
}
