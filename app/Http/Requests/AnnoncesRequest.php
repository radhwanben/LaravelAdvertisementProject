<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
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
            'terrainbati' => 'required|string',
            'titre' => 'required|string|min:4',
            'description' => 'required|string' ,
            'prix' =>'required|regex:/^\d+(\.\d{1,2})?$/' ,

        ];
    }
}
