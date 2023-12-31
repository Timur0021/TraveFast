<?php

namespace App\Http\Requests\Admin\Tiket;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'price' => 'required|integer',
            'image' => 'required|file',
            'count' => 'required|integer',
            'bus_id' => 'required|string',
            'city_id' => 'required|string',
            'group_id' => 'required|string',
        ];
    }
}
