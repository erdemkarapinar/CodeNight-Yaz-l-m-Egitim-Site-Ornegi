<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hakkimizda;

class HakkimizdaController extends Controller
{
    public function hak()
    {
        return view('anasayfa.hakkimizda');
    }
}
