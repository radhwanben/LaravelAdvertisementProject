<?php

namespace App\Http\Services;

use App\Models\Annonce;

class AnnonceStoreService 
{
 
    
    /**
     * AnnonceStore function 
     *
     * @param  mixed $name
     * @param  mixed $reference
     * @param  mixed $surface
     * @param  mixed $terrainbati
     * @param  mixed $documments
     * @param  mixed $titre
     * @param  mixed $description
     * @param  mixed $prix
     * @param  mixed $photos
     * @param  mixed $localisation
     * @param  mixed $user_id
     * @return void
     */


    public function AnnonceStore($name,$reference,$surface,$terrainbati,$documments,$titre,$description,$prix,$photos,$localisation,$user_id)
    {     
     
        $finaldocumment=[];
            $files= $documments;
            foreach ($files as $file){
                $finaldocumment[] .= md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                $file->move('storage', $documments);    
            }

        $uploads=$photos;
        $pics=[];
        foreach ($uploads as $upload){
            $pics [].= md5($upload->getClientOriginalName() . time()) . "." . $upload->getClientOriginalExtension();
            $upload->store('storage', $pics);    
        }
        

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
            'user_id' => $user_id
        ]);

        return $annonce;
    }




}
