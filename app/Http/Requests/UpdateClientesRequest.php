<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientesRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $method = $this->method();

        if ($method == 'PUT' || $method == 'POST') {
            $isRequiredOrSometimes = 'required';
        } else {
            $isRequiredOrSometimes = 'sometimes';
        }

        return [
            'nome' => "$isRequiredOrSometimes|string|max:255",
            'email' => "$isRequiredOrSometimes|email|unique:clientes",
            'telefone' => "$isRequiredOrSometimes|string|max:20",
            'data_de_nascimento' => "$isRequiredOrSometimes|date",
            'endereco' => "$isRequiredOrSometimes|string|max:255",
            'complemento' => 'nullable|string|max:255',
            'bairro' => "$isRequiredOrSometimes|string|max:255",
            'cep' => "$isRequiredOrSometimes|string|max:10",
            'data_de_cadastro' => "$isRequiredOrSometimes|date",
        ];
    }

}
