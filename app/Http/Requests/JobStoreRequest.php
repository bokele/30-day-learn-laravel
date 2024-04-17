<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobStoreRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'job_location' => ['required', 'string', 'max:255'],
            'employment_type' => ['required', 'string', 'max:255'],
            'salary' => ['required'],
            'description' => ['required'],
            'closing_date' => ['required', 'date'],
            'easy_apply' => ['nullable',],
            'application_form_link' => ['nullable', 'url'],
        ];
    }
}