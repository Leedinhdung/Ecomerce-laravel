<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
//            'fullname' => 'required',
            'email' => 'required|email:unique',
            'password' => ['required', 'string', 'min:8'],
//            'password_confirmation' => 'required|same:password',
        ];
    }
    public function messages()
    {
        return [
//            'fullname.required' => 'Vui lòng nhập họ và tên',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Mật khẩu ít nhất 8 ký tự',
//            'password_confirmation.required'=>'Vui lòng xác nhận mật khẩu',

        ];
    }
}
