<?php

namespace App\Http\Requests\Leads;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLeadRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['nullable', 'string'],
            'phone' => ['nullable', 'string', 'max:11', 'min:11','regex:/(07)[0-9]{9}/'],
            'easy_downPayment' => ['nullable', 'boolean'],
            'high_downPayment' => ['nullable', 'boolean'],
            'horizontal_complex' => ['nullable', 'boolean'],
            'vertical_complex' => ['nullable', 'boolean'],
            'area_100_200' => ['nullable', 'boolean'],
            'area_200_400' => ['nullable', 'boolean'],
            'middle_location' => ['nullable', 'boolean'],
            'suburbs_location' => ['nullable', 'boolean'],
            'out_bg_middle_cities' => ['nullable', 'boolean'],
            'out_bg_south_cities' => ['nullable', 'boolean'],
            'out_bg_kurdistan' => ['nullable', 'boolean'],
            'purpose_purchase' => ['nullable', 'boolean']
        ];
    }
}
