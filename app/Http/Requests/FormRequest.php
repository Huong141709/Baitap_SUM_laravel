<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest 
{

    public function authorize ()
    {
        return true ;
    }
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules ()
    {
         return [
            'name'=>'rquired|max:225|string',
            'age'=>'numeric',
            'date'=>'string',
            'phone'=>'numeric',
            'web'=>'string',
            'address'=>'string',
         ];
    }
    public function messages ()
    {
        return [
            'name.string'=>'vui long dien ten',
            'age.numeric'=>'vui long dien tuoi',
            'date.string'=>'vui long dien ngay thang ',
            'phone.numeric'=>'vui long dien so dien thoai ',
            'web.string'=>'vui long dien trang webite',
            'address.string'=>'vui long dien dia chi'
        ];

    }
}
