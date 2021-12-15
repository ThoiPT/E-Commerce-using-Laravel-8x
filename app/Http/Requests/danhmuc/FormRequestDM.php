<?php

namespace App\Http\Requests\danhmuc;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestDM extends FormRequest
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


    // Phương thức rules() được sử dụng để kiểm tra dữ liệu được nhập vào từ HTTP request
    public function rules()
    {
        return [
            'madanhmuc' => 'required',
            'tendanhmuc' => 'required'

        ];
    }

    // Function laravel
    public function messages()
    {
        return [
            'madanhmuc.required' => 'Mã danh mục không được trống',
            'tendanhmuc.required' => 'Chưa nhập tên danh mục',
        ];
    }
}
