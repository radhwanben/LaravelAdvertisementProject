<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Foundation\Http\FormRequest;


class AnnoncesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        
        return [
            'name' => 'required|string|min:4',
            'reference' => 'required|string',
            'surface' => 'required|integer',
            'file' => ['required', File::types(['pdf', 'docx'])],
            'terrainbati' => 'required|array',
            'titre' => 'required|string',
            'description' => 'required|string' ,
            'prix' =>'required|regex:/^\d+(\.\d{1,2})?$/' ,
            'photos'=>'required|array',
            'photos.*'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'localisation' =>'required',
            'user_id' => 'required'


        ];
    }
}
