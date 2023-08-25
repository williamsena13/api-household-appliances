<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Responses\ApiResponse;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Http\Requests\ApiResponse;
use Illuminate\Contracts\Validation\Validator;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $productId = optional($this->product)->id;

        $rules = [
            'name' => 'required',
            'description' => 'nullable',
            'voltage' => 'nullable|integer',
            'brand_id' => 'required|exists:bands,id',
        ];
        if ($this->isMethod('post')) {
            $rules['code'] = 'required|unique:products,code,' . $productId;
        }
        return $rules;
    }

    public function failedValidation(Validator $validator)
    {
        throw new ApiResponse::error($validator->errors()->first(), 422);
    }
}