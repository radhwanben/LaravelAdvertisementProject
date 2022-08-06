<?php

namespace App\Http\Requests;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class AnnoncesRequestStore extends FormRequest
{
 

    public function AnnonceStore($name,$reference,$surface,$terrainbati,$documments,$titre,$description,$prix,$photos,$localisation,$user_id)
    {

        

        $annonce = Annonce::create([
            'name' => $name,
            'reference'=>$reference,
            'surface'=>$surface,
            'terrainbati'=>$terrainbati,
            'file'=>$documments,
            'titre'=>$titre,
            'description'=>$description,
            'prix'=>$prix,
            'photos'=>$photos,
            'localisation'=>$localisation,
            'user_id' =>$user_id
        ]);

        return $annonce;
    }




}
