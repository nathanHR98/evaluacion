<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalirController extends Controller
{
    public function salida()
    {
        session()->forget('user_evaluacion');
        session()->forget('user_evaluacion_url');
    }
}
