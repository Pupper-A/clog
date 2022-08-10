<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MemoController extends Controller
{
    public function index(Memo $memo)
    {
        $memos=Memo::orderBy('created_at', 'desc')->get(); 
        
        return view('memo')->with('memos',$memos); 
         
    }

    public function store(Request $request)
    {
        Memo::create(['content' => $request->memo]);
        return back();
    }

   
}
