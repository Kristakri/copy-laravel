<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'name'=>'required|max:255',
            'description'=>'required|max:255',
            'page_extent'=>'required',
            "data_release" => "required",
            "tags" => "required",
            "ISBN" => "required",
            "img" => "required",
            "language" => "required",
            "genres"=> "required",
        ];
    }
}
