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
            'locations'         => 'required|integer',
            'name'              => 'required|max:50',
            'description'       => 'required',
            'length'            => 'sometimes|nullable|integer',
            'width'             => 'sometimes|nullable|integer',
            'rent'              => 'required|integer',
            'deposit'           => 'required|integer',
            'lease-min'         => 'sometimes|nullable|integer',
            'lease-max'         => 'sometimes|nullable|integer',
            'available-from'    => 'date_format:d-m-Y',
            'available-to'      => 'date_format:d-m-Y|after:' . $this->get('available-from'),
            'rooms'             => 'sometimes|nullable|integer',
            'bathrooms'         => 'sometimes|nullable|integer',

            'picture_1'         => 'sometimes|file|max:5000|mimes:jpeg,png,pdf',
            'picture_2'         => 'sometimes|file|max:5000|mimes:jpeg,png,pdf',
            'picture_3'         => 'sometimes|file|max:5000|mimes:jpeg,png,pdf',
            'picture_4'         => 'sometimes|file|max:5000|mimes:jpeg,png,pdf',
            'picture_5'         => 'sometimes|file|max:5000|mimes:jpeg,png,pdf',
            'picture_6'         => 'sometimes|file|max:5000|mimes:jpeg,png,pdf',
        ];
    }
}
