<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:191'],
            // 'email' => ['required', 'string', 'email', 'max:191', Rule::unique('users')->ignore(auth()->user())],
            'phone' => ['required', 'string', 'starts_with:+', 'max:191'],
            'country' => ['required', 'string', 'max:191'],
            'city' => ['required', 'string', 'max:191'],
            'address' => ['required', 'string', 'max:191'],
            'postcode' => ['required', 'string', 'min:5'],
            // 'prison_fname' => ['required', 'string', 'max:191'],
            // 'prison_lname' => ['required', 'string', 'max:191'],
            // 'prison_number' => ['required', 'string', 'max:191'],
            // 'prison_status' => ['required', 'string', 'max:191', 'in:sentenced,remanded'],
            // 'release_date' => ['required_if:prison_status,sentenced', 'nullable', 'date', 'before:today'],
            // 'prison_relation' => ['required', 'string', 'max:191'],
        ];
    }
}
