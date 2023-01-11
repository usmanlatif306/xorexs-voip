<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class PackageRequest extends FormRequest
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
        return [
            'name' => ['required', $this->isMethod('post') ? 'unique:packages' : Rule::unique('packages')->ignore($this->package)],
            'price' => ['required', 'numeric'],
            'lines' => ['required', 'numeric'],
            'minutes' => ['required', 'numeric'],
            'period' => ['required', 'in:week,1 month,3 months,6 months,year'],
            'status' => ['required', 'boolean', 'in:0,1']
        ];
    }

    /**
     * Get the validated data from the request.
     *
     * @param  string|null  $key
     * @param  mixed  $default
     * @return mixed
     */
    public function validated($key = null, $default = null)
    {
        return array_merge(parent::validated(), [
            'slug' => Str::slug($this->name, '_'),
        ]);
    }
}
