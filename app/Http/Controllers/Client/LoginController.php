<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\ClientLoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('client.auth.login');
    }



    public function postLogin(ClientLoginRequest $request){

        //return $request;

        $remember_me = $request->has('remember_me') ? true : false;
        if (auth()->guard('client')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {

            return redirect()->route('client.client');
        }


        return redirect()->back()->with(['error' => 'there is a problem']);

    }


    public function logout(){

        $gaurd = $this -> getGaurd();
        $gaurd -> logout();

        return Redirect()->route('client.login');
    }


    private function getGaurd(){

        return auth('client');
    }
}
