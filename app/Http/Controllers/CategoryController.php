<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Sinif;

class CategoryController extends Controller
{
    public function getAllCategory(Request $request)
   {
      $c=Category::all();
      return view('categories.category-all',compact('c'));
    }
    public function getCreateCategory(Request $request)
    {

        return view('categories.category-create');
    }
    public function postCreateCategory(Request $request)
    {
        $c=new Category();
        $c->create($request->all());
        return redirect()->route('admin.getAllCategory');    
    }
    public function getEditCategory(Request $request)
    {   
        $d=Category::findorFail($request->id);
        return view('categories.category-update',compact('d'));   
    }
    public function postEditCategory(Request $request)
    {
        $c=Category::find($request->id);
        $c->update($request->all());
        return redirect()->route('admin.getAllCategory');
    }
    public function getDeleteCategory(Request $request)
    {
        $c=Category::find($request->id);
        $c->delete();
        return redirect()->route('admin.getAllCategory');
    }
}
