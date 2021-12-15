<?php

namespace App\Http\Requests\nhacungcap;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestNCC extends FormRequest
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
            'mancc' => 'required',
            'tenncc' => 'required',
            'diachincc' => 'required',
            'sdtncc' => 'required',
        ];
    }

    // Function laravel
    public function messages()
    {
        return [
            'mancc.required' => 'Mã nhà cung cấp không được trống',
            'tenncc.required' => 'Vui lòng nhập tên',
            'sdtncc.required' => 'Vui lòng nhập số điện thoại',
            'diachincc.required' => 'Chưa nhập địa chỉ',
        ];
    }
}
