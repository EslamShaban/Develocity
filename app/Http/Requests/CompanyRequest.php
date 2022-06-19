<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' => 'required' ,
            'lat'  =>'nullable' ,
            'lng'  =>'nullable' ,
            'location' => 'nullable' ,
        ];
    }
}
