<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'=>'required|string',
            'email'=>'required',
            'phone'=>'required|numeric',
            'msg'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'name is required',
            'name.string'=>'name must be string',
            'email.required'=>'email is required',
            'phone.required'=>'phone is required',
            'phone.numeric'=>'insert numbers',
            'msg.required'=>'msg is required',
        ];
    }
}
