<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use App\Mail\Wellcome;



class RegistrationForm extends FormRequest
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
            'name'=>'required|max:255',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|confirmed',
            'password_confirmation'=> 'required'
        ];
    }
    public function messages(){
        return [
            'name.required'=>'Tên không được để trống',
            'name.max'=>'Tên tối đa 255 ký tự',
            'email.required'=>'Email không được để trống',
            'email.email'=>'Email không đúng định dạng',
            'email.unique'=>'Email đã tồn tại',
            'password.required'=>'Mật khẩu không được để trống',
            'password_confirmation.required'=> 'Mật khẩu xác nhận không được để trống',
            'password.confirmed'=>'Mật khẩu xác nhận không đúng'
        ];
    }
}
