<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AnnoncesRequest;
use App\Http\Services\AnnonceStoreService;

class AnnoncesController extends Controller
{
    public function index()
    {
        return view('Annonces.index');
    }


    
    /**
     * create anonce 
     *
     * @return view anonce view
     */

    public function create()
    {
        return view('Annonces.create');
    }

    
    /**
     * store anonce after validate the form inputs
     *
     * @param  mixed $validator request validation
     * @param  mixed $annoncerequest store anonce service
     * @return void
     */


    public function store(AnnoncesRequest $validator , AnnonceStoreService $annoncerequest)
    {

        
       $annonce= $annoncerequest->AnnonceStore(
        $validator->name,
        $validator->reference,
        $validator->surface,
        $validator->terrainbati,
        $validator->file,
        $validator->titre,
        $validator->description,
        $validator->prix,
        $validator->photos,
        $localisation ="london",
        $user_id =Auth::user()->id );

        return redirect()->route('listOfAnnonces')->with('success' ,"annonce created succufuly") ;

    }
}