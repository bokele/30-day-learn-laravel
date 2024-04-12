<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployerStoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255', 'unique:employers'],
            'phone_number' => ['required', 'string', 'max:255', 'unique:employers'],
            'email' => ['required', 'email', 'max:255', 'unique:employers'],
            'address' => ['required', 'string', 'max:255',],
            'short_description' => ['required', 'string',],
            'video_url' => ['nullable', 'url:http,https',],
            'website_url' => ['nullable', 'url:http,https',],
            'company_logo' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:2048'],
            'project_from' => ['required',],
        ];
    }
}
