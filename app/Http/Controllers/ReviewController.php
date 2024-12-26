<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function review(){
        return view('review');
    }
    public function review_check(Request $request){
        $valid = $request->validate([
           'email' => 'required|min:5|max:50|email',
            'subject' => 'required|min:5|max:200',
            'message' => 'min:5|max:500',

        ]);
    }
}
