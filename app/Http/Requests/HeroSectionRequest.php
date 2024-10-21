<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeroSectionRequest extends FormRequest
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
            
                'person_name'=>'required',
                'hello'=>'required',
                'designation'=>'required',
                'btn_text'=>'required',
                'btn_url'=>'required'
               
        ];
    }
    public function messages()
    {
        return [
            'person_name.required'=>'নামের স্থান ফাকা রাখা যাবে না।',
            'hello.required'=>'হ্যালো অংশ ফাকা রাখা যাবে না।',
            'designation.required'=>'পদবী উল্লেখ করতে হবে।',
            'btn_text.required'=>'ফাকা রাখা যাবে না।',
            'btn_url.required'=>'ফাকা রাখা যাবে না।',
        ];
    }
}
