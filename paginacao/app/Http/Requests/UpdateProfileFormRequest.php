<?php

namespace App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileFormRequest extends FormRequest
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

    /**a
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {   
         $id = auth()->user()->id;
        return [
            // regras
            'name' =>    'required|string|max:255',
            'email' =>   "required|string|email|max:255|unique:users,email,{$id},id",
            'password' => 'min:60',
            'image'    => 'image'


        ];
    }
}
