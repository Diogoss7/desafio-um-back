<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'client' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'salesperson' => 'required|string|max:255',
            'description' => 'required|string',
            'amount' => 'required|numeric',
            'phone' => 'required|string|max:20'
        ];
    }
}
