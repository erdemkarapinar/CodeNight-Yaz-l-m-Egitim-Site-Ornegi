<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Sinif;

class SinifController extends Controller
{
    public function getAllSinif(Request $request)
    {
        $d=Sinif::all();
        $c=Category::all();
        return view('sinif.sinif-all',compact('d','c'));
    }
    public function getCreateSinif(Request $request)
    {
        $d=Sinif::all();
        $c=Category::all();
        return view('sinif.sinif-create',compact('c','d'));
    }
    public function postCreateSinif(Request $request)
    {
        $d=new Sinif();
        $d->create($request->all());
        return redirect()->route('admin.getAllSinif');    
    }
    public function getEditSinif(Request $request)
    {
        $d=Sinif::find($request->id);
        $c=Category::all();
        return view('sinif.sinif-update',compact('d','c','request'));   
    }
    public function postEditSinif(Request $request)
    {
        $d=Sinif::find($request->id);
        $d->update($request->all());
        return redirect()->route('admin.getAllSinif');
    }
    public function getDeleteSinif(Request $request)
    {
        $d=Sinif::find($request->id);
        $d->delete();
       return redirect()->route('admin.getAllSinif');

    }
}
