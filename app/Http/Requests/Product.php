<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Product extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return    [
            'name' => 'required|min:5',
            'price' => 'required|numeric',
            'description' => 'required',
            'idCate' => 'required',
            'status' => 'required',
            // 'image' => 'image|mimes:jpeg,png,jpg|max:10000'
        ];
    }
    public function messages()
{
    return [
        'name.required' => 'Vui lòng nhập tên sản phẩm',
        'name.min' => 'Tên sản phẩm tối thiểu 5 ký tự',
        'price.required'=>'Vui lòng nhập giá tiền',
        'price.numeric'=>'Giá tiền phải là số',
        'description.required'=>'vui lòng nhập mô tả',
        'idCate'=>'vui lòng chọn danh mục sản phẩm',
        'status'=>'vui lòng chọn trạng thái',
        // 'image.image'=>'vui lòng nhập ảnh',
        // 'image.mimes'=>'Vui lòng chọn đúng đúng định dạng ảnh',
        // 'image.max'=>'ảnh kích cỡ quá lớn'
    ];
}
}
