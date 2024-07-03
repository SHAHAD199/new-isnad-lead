<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        $user = $this->route()->parameter('user');
        return [
            'name'  => ['required' , 'string'],
            "phone" =>  ['nullable','string','max:11', 'min:11','regex:/(07)[0-9]{9}/','unique:users,phone,'. $user->id],
            'password' => ['required', 'string']
        ];
    }
}
