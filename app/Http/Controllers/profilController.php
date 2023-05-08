<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profil;

class profilController extends Controller
{
    public function index()
    {   
        $prof = profil::all();
        return view('profil')->with('profil', $prof);
    }
    
}
