<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FormController;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function login(){
        return view('signin');
    }
    public function store(Request $request){
        $this->validate($request,
        ['first'=>'bail|required|alpha',
        'last'=>'bail|required|alpha',
        'email'=>'bail|required|email',
        'phone'=>'bail|required|digits:10',
        'date_start'=>'bail|required|date|after:tomorrow',
        'date_end'=>'bail|required|date|after:date_start'
        ]);

        $firstsaisi= $request->input('first');
        $lastsaisi= $request->input('last');
        $mailsaisi=$request->input('email');
        $phonesaisi=$request->input('phone');
        $date_start=$request->input('date_start');
        $date_end= $request->input('date_end');

        $message="Thank you ".ucwords($firstsaisi)." ".strtoupper($lastsaisi)." for your Registration for our Training LARAVEL 8 ! ";


       return //back()->with ('success', $message); 
        view('info', compact('message'));
       
    }
}
