<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnoncesController extends Controller
{
    public function index()
    {
        return view('Annonces.index');
    }
}
