<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PerangDuniaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'nama_perang' => 'required',
            'kronologi_perang' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'nama_perang.required' => 'Nama perang tidak boleh kosong!',
            'kronologi_perang.required' => 'Kronologi perang tidak boleh kosong!',
        ];
    }
}
