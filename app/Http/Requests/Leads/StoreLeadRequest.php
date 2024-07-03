<?php

namespace App\Http\Requests\Leads;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeadRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'phone' => ['required', 'string', 'max:11', 'min:11','regex:/(07)[0-9]{9}/'],
            'easy_downPayment' => ['required', 'boolean'],
            'high_downPayment' => ['required', 'boolean'],
            'horizontal_complex' => ['required', 'boolean'],
            'vertical_complex' => ['required', 'boolean'],
            'area_100_200' => ['required', 'boolean'],
            'area_200_400' => ['required', 'boolean'],
            'middle_location' => ['required', 'boolean'],
            'suburbs_location' => ['required', 'boolean'],
            'out_bg_middle_cities' => ['required', 'boolean'],
            'out_bg_south_cities' => ['required', 'boolean'],
            'out_bg_kurdistan' => ['required', 'boolean'],
            'purpose_purchase' => ['required', 'boolean']
        ];
    }
}
