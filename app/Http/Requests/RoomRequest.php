<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
            'locations'        => 'required',
            'name'             => 'required',
            'description'      => 'required',
            'length'           => '',
            'width'            => '',
            'rent'             => 'required',
            'deposit'          => 'required',
            'lease-min'        => '',
            'lease-max'        => '',
            'available-from'   => '',
            'available-to'     => '',
            'rooms'            => '',
            'bathrooms'        => '',
        ];
    }
}
