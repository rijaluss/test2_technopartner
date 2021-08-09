<?php

namespace App\Http\Controllers;

use App\Category;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\Readline\Transient;

class transactionController extends Controller
{
    public function index()
    {
        $transaksi = Transaction::where('user_id',Auth::user()->id)->get();
        return view('transaksi')->with([
            'data' => $transaksi
        ]);
    }
    public function addForm()
    {
        $kategori = Category::where('user_id',Auth::user()->id)->get();
        return view('tambah_transaksi')->with([
            'data' => $kategori
        ]);
    }
    public function add(Request $request)
    {
        $baru = new Transaction();
        $baru->category_id = $request->kategori;
        $baru->description = $request->description;
        $baru->nominal = $request->nominal;
        $baru->user_id = Auth::user()->id;
        $baru->save();
        if ($baru) {
            return redirect('/transaksi');
        }
    }
}
