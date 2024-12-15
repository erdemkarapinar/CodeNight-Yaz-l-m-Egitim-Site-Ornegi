<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uyeol;

class UyeolController extends Controller
{
    public function getAllUye(Request $request)
    {
        $p=Uyeol::all();
        return view('TumUyeler',compact('p'));
    }
    public function getCreateUye(Request $request)
    {
        $p=Uyeol::all();
        return view('Uyeol',compact('p'));
    }
    public function postCreateUye(Request $request)
    {
        $p=new Uyeol();
        $p->create($request->all());
        return redirect()->route('Uyeol');    
    }
    public function getEditUye(Request $request)
    {
        $p=Uyeol::find($request->id);
        return view('Uyeduzenle',compact('p','request'));   
    }
    public function postEditUye(Request $request)
    {
        $p=Uyeol::find($request->id);
        $p->update($request->all());
        return redirect()->route('anasayfa');
    }
    public function getDeleteUye(Request $request)
    {
        $p=Uyeol::find($request->id);
        $p->delete();
       return redirect()->route('TumUyeler');

    }
}
