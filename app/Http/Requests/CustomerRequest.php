<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'img' => 'required',
            'msg' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'name is required',
            'name.string'=>'name must be string',
            'img.required'=>'image is required',
            'msg.required'=> 'message is required',
        ];
    }
}
