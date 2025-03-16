<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class TaskRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'status_id' => 'required',
            'deadline' => [function($attribute, $value, $fail) {
                if(Carbon::parse($value)->isBefore(Carbon::today())) {
                    $fail('期限日は今日以降を選択してください');
                }
            }],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'タスク名は必須です',
            'title.string' => '文字列で入力してください',
            'title.max' => '255文字以内で入力してください',
            'status_id.required' => '状態の選択は必須です',
        ];
    }
}
