<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
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
          'model' => 'required|max:30',
          'brand_id' => 'required',
          'category_id' => 'required',
          'year' => 'required',
          'price' => 'required',
          'images' => 'nullable|max:2048',
          'description' => 'nullable|max:150',
          'mileage' => 'nullable|numeric|max:999999',
          'optional' => 'nullable',
        ];
    }
}
