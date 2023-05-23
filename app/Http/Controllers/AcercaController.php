<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class AcercaController extends Controller
{
    public function sobre_acerca(){
        return view('acerca');
    }
    //
}

