<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supplier\SupplierLoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('supplier.auth.login');
    }



    public function postLogin(SupplierLoginRequest $request){

        //return $request;

        $remember_me = $request->has('remember_me') ? true : false;
        if (auth()->guard('supplier')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {

            return redirect() -> route('supplier.supplier');
        }


        return redirect()->back()->with(['error' => 'there is a problem']);

    }


    public function logout(){

        $gaurd = $this -> getGaurd();
        $gaurd -> logout();
        return Redirect() -> route('supplier.login');
    }


    private function getGaurd(){

        return auth('supplier');
    }


}
