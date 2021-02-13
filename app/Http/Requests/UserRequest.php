<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;
use Illuminate\Support\Facades\Log;

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
        $all = $this->validationData();//Array
        Log::info('messageAAA');
        $vali = [
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => [
                'required',
                'between:8,32',
                'regex:/^.*((?=.*[A-Za-z])(?=.*[0-9])|(?=.*[A-Za-z])(?=.*[!_@])|(?=.*[0-9])(?=.*[!_@])).*$/',
                'max:16', //password unique
            ],
            'email' => [
                'required',
                'regex:/^[a-zA-Z0-9_+-]+(.[a-zA-Z0-9_+-]+)*@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/',
                'unique:users,email'
            ], //email unique
        ];
        Log::info('messageBBB');
        return $vali;
    }
}
