<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreAssetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'patrimonio' => 'required|string|unique:assets,patrimonio',
            'tipo' => 'required|string',
            'numero_serie' => 'required|string|unique:assets,numero_serie',
            'status' => 'nullable|string',
        ];
    }
}
