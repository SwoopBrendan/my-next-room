<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomSearchRequest extends FormRequest
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
            'locations'         => 'sometimes|nullable|integer',
            'min_rent'          => 'sometimes|nullable|integer',
            'max_rent'          => 'sometimes|nullable|integer',
            'available-from'    => 'sometimes|nullable|date_format:d-m-Y',
        ];
    }
}
