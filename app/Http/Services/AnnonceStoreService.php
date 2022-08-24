<?php

namespace App\Http\Services;

use App\Models\Annonce;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AnnoncesRequest;

class AnnonceStoreService 
{
 
    

    
    /**
     * AnnonceStore fucntion to store input in database
     *
     * @param  mixed $validator request validator 
     * @return void  
     */



    public function AnnonceStore($validator )
    {     
     
        $uploadsdocs=$validator['file'];
        $doc=[];
        foreach ($uploadsdocs as $uploaddoc){
            $doc []= md5($uploaddoc->getClientOriginalName() . time()) . "." . $uploaddoc->getClientOriginalExtension();
            $uploaddoc->store('storage', $doc);    
        }
        

        $uploads=$validator['photos'];
        $pics=[];
        foreach ($uploads as $upload){
            $pics [].= md5($upload->getClientOriginalName() . time()) . "." . $upload->getClientOriginalExtension();
            $upload->store('storage', $pics);    
        }

        
       // $annonce =Annonce::create($validator->all());
       $annonce=new Annonce();
       $annonce->name = $validator['name'];
        $annonce->reference=$validator['reference'];
        $annonce->surface=$validator['surface'];
        $annonce->terrainbati=$validator['terrainbati'];
        $annonce->file =$validator['file'];
        $annonce->titre=$validator['titre'];
        $annonce->description=$validator['description'];
        $annonce->prix=$validator['prix'];
        $annonce->photos=$validator['photos'];
        $annonce->localisation=$validator['localisation'];
        $annonce->user_id=Auth::user()->id;
        $annonce->save();

        return $annonce;


        

    }




}
