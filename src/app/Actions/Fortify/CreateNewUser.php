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
        Validator::make($input, [
            'name' => ['required', 'string', 'max:40'],
            'email' => [
                'required',
                'string',
                'email',
                'max:191',
                'unique:users,email',
                Rule::unique(User::class),
            ],
            'tel' => ['nullable', 'string', 'digits_between:10,11'],
            'password' => [
                'required',
                'string',
                'min:8',
                'max:191',
                'regex:/^[a-zA-Z0-9]+$/',
            ],
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'tel' => $input['tel'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
