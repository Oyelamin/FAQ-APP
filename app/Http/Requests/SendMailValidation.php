<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendMailValidation extends FormRequest
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
            'mailAddress' => 'required|email',
            'subject'=> 'min:3',
            'message' => 'min:10',
            'to'  => 'blessingcodephp@gmail.com'
        ];
    }
}
