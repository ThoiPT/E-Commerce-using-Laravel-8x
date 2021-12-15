<?php

namespace App\Http\Requests\sanpham;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestSP extends FormRequest
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
            'mshh' => 'required',
            'madanhmuc' => 'required',
            'mancc' => 'required',
            'tensp' => 'required',
            'gianhap' => 'required',
            'giaban' => 'required',
            'soluong' => 'required',
            'hinhanh_sp' => 'required',
            'motasp' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'mshh.required' => 'Mã hàng hóa không được trống',
            'madanhmuc.required' => 'Chưa chọn danh mục',
            'mancc.required' => 'Chưa chọn nhà cung cấp',
            'tensp.required' => 'Tên sản phẩm trống',
            'gianhap.required' => 'Chưa nhập giá',
            'giaban.required' => 'Chưa nhập giá',
            'soluong.required' => 'Chưa nhập số lượng',
            'hinhanh_sp.required' => 'Hình ảnh trống',
            'motasp.required' => 'Mô tả trống',
        ];
    }
}


