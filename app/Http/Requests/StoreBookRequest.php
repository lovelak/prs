<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;

class StoreBookRequest extends FormRequest
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
            // 'book_title' => 'required|alpha_num',
            // 'book_price' => 'required|numeric',
            'book_title' => 'required',
            'book_price' => 'required',
            'typebooks_id' => 'required',
            'book_image' => 'mimes:jpeg,jpg,png',
        ];
    }

    public function messages() {
        return [
            'book_title.required' => 'กรุณากรอกชื่อหนังสือ',
            // 'book_title.alpha_num' => 'กรุณากรอกตัวเลขหรือตัวอักษรเท่านั้น',
            'book_price.required' => 'กรุณากรอกราคา',
            // 'book_price.numeric' => 'กรุณากรอกตัวเลขเท่านั้น',
            'typebooks_id.required' => 'กรุณาเลือกหมวดหนังสือ',
            'book_image.mimes' => 'กรุณาเลือกไฟล์ภาพนามสกุล jpeg,jpg,png',
        ];
    }
}
