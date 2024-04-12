<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmployerUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (auth()->user()->employer_id == $this->company->id) {
            return true;
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255',  Rule::unique('employers')->ignore($this->company)],
            'phone_number' => ['required', 'string', 'max:255', Rule::unique('employers')->ignore($this->company)],
            'email' => ['required', 'email', 'max:255', Rule::unique('employers')->ignore($this->company)],
            'address' => ['required', 'string', 'max:255',],
            'short_description' => ['required', 'string',],
            'video_url' => ['sometimes', 'url:http,https',],
            'website_url' => ['sometimes', 'url:http,https',],
            'company_logo' => ['sometimes', 'image', 'mimes:png,jpg,jpeg', 'max:2048'],
            'project_from' => ['required',],
        ];
    }
}
