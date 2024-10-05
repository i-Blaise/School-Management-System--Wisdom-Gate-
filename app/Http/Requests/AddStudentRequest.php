<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddStudentRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'student_image' => 'mimes:png,jpg,heic,avif,webp,jpeg',
            'dob' => 'required',
            'hometown' => 'required',
            'nationality' => 'required',
            'gender' => 'required',
            'residence_address' => 'required',
            'language1' => 'required',
            'Immunization_record' => 'mimes:png,jpg,heic,avif,webp,jpeg,pdf',
        ];
    }

       // Customize error messages
       public function messages()
       {
           return [
               'first_name.required' => 'Please enter students first name',
               'last_name.required' => 'Please enter students last name',
               'student_image.mimes' => 'File type error for Students Image. Please try a different image',
               'dob.required' => 'Students date of birth is required to calculate age',
               'hometown.required' => 'Students hometown is required',
               'nationality.required' => 'Students nationality is required.',
               'Immunization_record.mimes' => 'File type error for Immunization records. Please try a different image'
           ];
       }
}
