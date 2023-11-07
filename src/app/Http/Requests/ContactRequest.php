<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'last_name' => 'required',
            'first_name' => 'required',
            // 'gender' => 'required',
            'email' => 'email|required',
            'postcode' => 'required|integer|min:8|max:8',
            'address' => 'required',
            'building_name' => 'nullable',
            'opinion' => 'required|max:120'
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => '名前を入力してください',
            'first_name.required' => '名前を入力してください',
            'email.email' => 'メールアドレスを正しく入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'postcode.required' => '郵便場号を入力してください',
            'postcode.integer' => '郵便番号を正しく入力してください',
            'postcode.min' => '8文字で入力してください',
            'postcode.max' => '8文字で入力してください',
            'address.required' => '住所を入力してください',
            'opinion.required' => 'お問い合わせ内容を入力してください',
        ];
    }
}
