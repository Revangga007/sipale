<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class PenyakitRequest extends FormRequest
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
            'nama' => 'required|min:2|string',
            'deskripsi' => 'required|min:2|string',
            'solusi' => 'required',
            'gambar' => 'file|image|mimes:jpeg,png,jpg'
        ];
    }
}
