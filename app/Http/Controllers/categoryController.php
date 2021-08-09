<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Auth;

class categoryController extends Controller
{
    public function index()
    {
        $category = Category::where('user_id',Auth::user()->id)->get();
        return view('kategori')->with([
            'data' => $category
        ]);
    }
    public function add(Request $request)
    {
        $baru = new Category();
        $baru->category_name = $request->kategori;
        $baru->type = $request->tipe;
        $baru->user_id = Auth::user()->id;
        $baru->save();
        if($baru){
            return redirect('/kategori');
        }
    }
}
