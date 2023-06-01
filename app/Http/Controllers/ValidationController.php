<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function showForm(){
        return view('welcome');
    }

    public function validation(LoginRequest $request){
        $validation=[
            "fullname"=>$request->fullname,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "pass"=>$request->pass,
            "confirmpass"=>$request->confirmpass
        ];

        return view('welcome',['validation'=>$validation]);
    }
}