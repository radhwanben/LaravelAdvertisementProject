<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AnnoncesRequest;
use App\Http\Requests\AnnoncesRequestStore;

class AnnoncesController extends Controller
{
    public function index()
    {
        return view('Annonces.index');
    }



    public function create()
    {
        return view('Annonces.create');
    }


    public function store(AnnoncesRequest $validator , AnnoncesRequestStore $annoncerequest ,Request $request)
    {

        $request->validate([
            'photos'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('file','photos'))
        {
            $documments=null;
            $files= $request->input('file');
            foreach ($files as $file){
                $documments .= md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                $file->move('storage', $documments);    
            }

        $photos=$request->input('photos');
        $pics=null;
        foreach ($photos as $photo){
            $pics .= md5($photos->getClientOriginalName() . time()) . "." . $photos->getClientOriginalExtension();
            $file->move('storage', $pics);    
        }

        }

        
       $annonce= $annoncerequest->AnnonceStore(
        $validator->name,
        $validator->reference,
        $validator->surface,
        $validator->terrainbati,
        $documments =$request->input('file'),
        $validator->titre,
        $validator->description,
        $validator->prix,
        $photos =$request->input('photos'),
        $localisation->$request->input('localisation'),
        $user_id->Auth::user()->id );

        return redirect()->route('listOfAnnonces')->with('success' ,"annonce created succufuly") ;

    }

}
