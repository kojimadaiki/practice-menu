<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
            'title' => 'required | max:100', // Swim, Kick, Pull, W-up
            'style' => 'required', // 種目
            'times' => 'required', // 本数
            'strength' => 'required', // 強度・練習内容
            'long' => 'required', // 距離
            'time' => 'required', // サークル
            'total' => 'required', // トータル
            'impression' => 'required', // 感想・反省
            'date' => 'required', //練習を行った日程、時間
        ];
    }
}
