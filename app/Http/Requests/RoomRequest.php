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
            'locations'         => 'required',
            'name'              => 'required',
            'description'       => 'required',
            'length'            => 'sometimes|max:10',
            'width'             => 'sometimes|max:10',
            'rent'              => 'required',
            'deposit'           => 'required',
            'lease-min'         => 'sometimes',
            'lease-max'         => 'sometimes',
            'available-from'    => 'date_format:d-m-Y',
            'available-to'      => 'date_format:d-m-Y|after:' . $this->get('available-from'),
            'rooms'             => 'sometimes',
            'bathrooms'         => 'sometimes',

            'picture_1'         => 'sometimes|file|max:5000|mimes:jpeg,png,pdf',
            'picture_2'         => 'sometimes|file|max:5000|mimes:jpeg,png,pdf',
            'picture_3'         => 'sometimes|file|max:5000|mimes:jpeg,png,pdf',
            'picture_4'         => 'sometimes|file|max:5000|mimes:jpeg,png,pdf',
            'picture_5'         => 'sometimes|file|max:5000|mimes:jpeg,png,pdf',
            'picture_6'         => 'sometimes|file|max:5000|mimes:jpeg,png,pdf',
        ];
    }
}
