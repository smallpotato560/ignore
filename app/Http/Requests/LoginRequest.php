<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;

class LoginRequest extends Request
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
            //
            "username"=>"required|min:5|unique|max:20",
            "password"=>"required|min:8|max:32",
            "email"=>"required|email|unique:users",
        ];
    }
}
