<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|max:255|string',
            'age'=>'numeric',
            'date'=>'date',
            'phone'=>'numeric',
            'web'=>'string',
            'address'=>'string'
        ];
    }
    public function messages() {
        return [
            'name.string'=>'Vui lòng điền tên đàng hoàng',
            'age.numeric'=>'Vui lòng nhập đúng số tuổi của bạn',
            'date.string'=>'Vui lòng điền chính xác ngày, tháng',
            'phone.numeric'=>"Vui lòng điền cho đúng",
            'web.string'=>"Vui lòng đưa link trang web có thực",
            'address.string'=>"Điền cho đúng vào",
        ];
    }
}
