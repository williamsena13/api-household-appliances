<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'code' => 'required|unique:products,code,' . ($this->product ? $this->product->id : ''),
            'name' => 'required',
            'description' => 'nullable',
            'voltage' => 'nullable|integer',
            'brand_id' => 'required|exists:bands,id',
        ];
    }
}