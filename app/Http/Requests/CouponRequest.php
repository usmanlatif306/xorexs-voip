<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CouponRequest extends FormRequest
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
        if ($this->isMethod('post')) {
            return [
                'name' => 'required|unique:coupons',
                'value' => 'required|numeric',
                'status' => 'required|boolean|in:0,1'
            ];
        }

        if ($this->isMethod('put') || $this->isMethod('pacth')) {
            return [
                'name' => ['required', Rule::unique('coupons')->ignore($this->coupon)],
                'value' => ['required', 'numeric'],
                'status' => 'required|boolean|in:0,1'
            ];
        }
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'coupon code is required',
            'name.unique' => 'coupon code must be unique',
            'value.required' => 'coupon code discount(%) is required',
            'value.numeric' => 'coupon code discount(%) must be a number',
        ];
    }
}
