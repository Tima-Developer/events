<?php

namespace App\Http\Requests\Api\Event;

use App\Http\Requests\Api\ApiRequest;

class ListRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'date_start' => 'date',
            'date_end'   => 'date',
        ];
    }
}
