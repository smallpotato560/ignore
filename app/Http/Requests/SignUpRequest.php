<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SignUpRequest extends Request
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
            "name"=>"required|min:5|max:20",
            "password"=>"required|min:8|max:32",
            "email"=>"required|email",
            "tel"=>"required|min:11|max:11",
        ];
    }
}
