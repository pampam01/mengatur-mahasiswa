<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditMahasiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "nim" => ["required", "max:9"],
            "nama" => ["required", "max:50"],
            "jenis_kelamin" => ["required", "max:1"],
            "id_kelas" => ["required"],
        ];
    }
}