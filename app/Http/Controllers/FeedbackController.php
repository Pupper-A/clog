<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
   public function index(){
    return view('feedback');
   }

   public function store(Request $request){
      Feedback::create(['message' => $request->message]);
      return view('thankspage');
     }
}
