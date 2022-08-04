<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    public function index()
    {
        $memos=Memo::all();
        return view('memo')->with('memos',$memos);  
    }

    public function store(Request $request)
    {
        Memo::create(['content' => $request->memo]);
        return back();
    }

   
}
