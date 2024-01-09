<?php

namespace App\Http\Controllers;

use App\Models\Receitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\Vue;

class HomeController extends Controller
{
    
    public function index()
    {
        if (Auth::id()) {

           
                $receitas = Receitas::all();

                return view('layouts.Home')->with('receitas',$receitas );
        }

    }


    public function show()
    {
        if (Auth::id()) {
            $receitas = Receitas::all();
            
            return view('layouts.Home')->with('receitas',$receitas );
        }
       return  view('app');
    }
}
