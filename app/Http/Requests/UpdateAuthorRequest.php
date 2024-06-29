<?php

namespace App\Http\Requests;

class UpdateAuthorRequest extends StoreAuthorRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|unique:authors,name,'.$this->author->id,
        ];
    }
}