<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   
    /**
     * function return the profil view
     */
   
    public function index()
    {
        return view('auth.profil');
    }


    /**
     * @param Request 
     * 
     * this function to update the profil in database 
     * require the photo of the profil 
     * 
     * @return dashbord view
     * 
     */

    public function update(Request $request)
    {
        $request->validate([
            'file'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
        $fileName = null;
        if (request()->hasFile('file')) {
            $file = request()->file('file');
            $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('storage', $fileName);    
        }
    
        $user= User::where('email' , $request->email)->update(
            [
                'name' =>$request->name,
                'email' =>$request->email,
                'avatar' =>$fileName,
                'phone' =>$request->phone
            
            ]
            );
            return redirect()->route('home');
    }
}
