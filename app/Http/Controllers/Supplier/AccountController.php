<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supplier\PasswordRequest;
use App\Http\Requests\Supplier\SupplierRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function account(){

        $supplier = Supplier::find(auth()->user()->id);

        return view('supplier.setting.profile.view',compact('supplier'));
    }



    public function updateaccount(SupplierRequest $request, $id){

        //return $request;

        $supplier = Supplier::find($id);

        if (!$supplier) {
            return redirect()->back()-> with(['error' => 'this user does not exist']);
        }


            $fileName = '';

            if ($request->has('image')) {
                $fileName = uploadImage('suppliers', $request->image);

                $supplier->update([
                    'first_name'=>$request->first_name,
                    'last_name' =>$request->last_name,
                    'email'=>$request->email,
                    'mobile'=>$request->mobile,
                    'image'=>$fileName,
                ]);
            }


            $supplier->update($request->except('_token', 'id','role_id','image'));



        return redirect()->route('supplier.setting.profile')->with(['success' => 'updated with success']);
    }



    public function security(){

        $supplier = Supplier::find(auth()->user()->id);

        return view('supplier.setting.profile.security',compact('supplier'));

    }

    public function updatesecurity(PasswordRequest $request , $id){

        $supplier = Supplier::find($id);

        if (!$supplier) {
            return redirect()->back()-> with(['error' => 'this user does not exist']);
        }

        if ($request->password != null) {

            $supplier->update([
                'password'=>bcrypt($request->password),
            ]);

            return redirect()->route('supplier.settings.account.security')->with(['success' => 'updated with success']);
        }


        return redirect()->route('supplier.setting.profile');


    }
}
