<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BandRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|unique:bands,name,' . ($this->band ? $this->band->id : ''),
            'description' => 'nullable',
            'status' => 'required|integer',
        ];
    }
}