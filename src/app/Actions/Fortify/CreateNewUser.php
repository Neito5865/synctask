<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        $rules = [
            'name' => ['required', 'string', 'max:80'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'tel' => ['nullable', 'string', 'digits_between:10,11'],
            'password' => [
                'required',
                'string',
                'min:8',
                'max:255',
                'regex:/^[a-zA-Z0-9]+$/',
            ],
        ];

        $messages = [
            'name.required' => '名前を入力してください',
            'name.string' => '名前は文字列で入力してください',
            'name.max' => '名前は80文字以下で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスは文字列で入力してください',
            'email.email' => 'メール形式で入力してください',
            'email.max' => 'メールアドレスは255文字以下で入力してください',
            'email.unique' => 'このメールアドレスはすでに登録されています',
            'tel.string' => '電話番号は文字列で入力してください',
            'tel.digits_between' => '電話番号は10文字か11文字で入力してください',
            'password.required' => 'パスワードを入力してください',
            'password.string' => 'パスワードは文字列で入力してください',
            'password.min' => 'パスワードは8文字以上で入力してください',
            'max' => 'パスワードは255文字以下で入力してください',
            'regex' => 'パスワードには半角英数字のみを使用してください',
        ];

        Validator::make($input, $rules, $messages)->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'tel' => $input['tel'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
