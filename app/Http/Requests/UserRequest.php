<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
//    private mixed $user_id;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
//        dd($this->user_id);
        return array(
            'name'=>'required|unique:users',
            'email'=> $this->user_id . 'required|string|email|unique:users,email',

            'role'=>'required|integer',
//            'user_id'=>'required|integer|exists:users,id'
        );
    }
}
