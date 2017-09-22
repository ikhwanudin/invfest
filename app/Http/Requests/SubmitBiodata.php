<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitBiodata extends FormRequest
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
            'nama_tim' => 'nullable|unique:users,nama_tim,'.auth()->user()->id.'|max:20',
            'asal_sekolah' => 'required|regex:/^[A-Za-z0-9\s]+$/',
            'email' => 'required|email',
            'pendamping' => 'required|regex:/^[\pL\s]+$/u',
            'ketua_tim' => 'required|regex:/^[\pL\s]+$/u',
            'tanggal_lahir' => 'required|date_format:d/m/Y',
            'anggota_1' => 'nullable|regex:/^[\pL\s]+$/u',
            'tanggal_lahir_1' => 'nullable',
            'anggota_2' => 'nullable|regex:/^[\pL\s]+$/u',
            'tanggal_lahir_2' => 'nullable',
        ];
    }
    public function messages()
    {
        return [
            'nama_tim.required' => 'Nama tim masih kosong',
            'nama_tim.unique' => 'Nama tim tidak tersedia',
            'asal_sekolah.required'  => 'Asal sekolah masih kosong',
            'asal_sekolah.alpha_num' => 'Hanya karakter huruf dan angka',
            'ketua_tim.regex' => 'hanya huruf yang di perbolehkan',
            'anggota_1.regex' => 'hanya huruf yang di perbolehkan',
            'anggota_2.regex' => 'hanya huruf yang di perbolehkan',
        ];
    }
}
