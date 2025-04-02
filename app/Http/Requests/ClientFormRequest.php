<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientFormRequest extends FormRequest
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
            'time' => 'required|date_format:H:i:s',
            'salesperson' => 'required|string|max:255',
            'description' => 'required|string',
            'amount' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'phone' => 'required|string|max:20'
        ];
    }
}
