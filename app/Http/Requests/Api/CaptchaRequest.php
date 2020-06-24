<?php

namespace App\Http\Requests\Api;

class CaptchaRequest extends FormRequest
{
    public function rules()
    {
        return [
            'phone' => [
                'required',
                'regex:/^((13[0-9])|(14[5,7])|(15[0-3,5-9])|(17[0,3,5-8])|(18[0-9])|166|198|199)\d{8}$/',
                'unique:users,phone'
            ]
        ];
    }


    public function messages()
    {
        return [
            'name.required' => '手机号不能为空。',
            'phone.unique'   => '手机号已被占用，请重新填写。',
            'phone.regex'    => '手机号码格式错误！',
        ];
    }
}
