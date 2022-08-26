<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supplier\ProfileRequest;
use App\Http\Requests\Supplier\SupplierRequest;
use App\Models\Country;
use App\Models\Supplier;
use App\Models\SupplierCompany;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function profile(){


        $data = auth()->user()->companies;

            //return $data;
            return view('supplier.profile.profile',compact('data'));

    }


    public function store(ProfileRequest $request){

        //return $request;

        try{

            DB::beginTransaction();
            $fileName = "";
            if ($request->has('logo')) {

                $fileName = uploadImage('profile', $request->logo);

            }
            $company = SupplierCompany::create($request->except('_token','logo'));

            $company->logo = $fileName ;
            $company->save();


            $supplier = Supplier::find(auth('supplier')->user()->id);

            $supplier ->update(['company_id' => $company->id]);

            DB::commit();

            return redirect()->route('supplier.profile.profile')->with(['success' => 'added with success']);


        }catch(Exception $ex){

            DB::rollback();
            return redirect()->route('supplier.profile.profile')->with(['error' => 'there is a problem']);
        }


    }



    public function edit($id){

        $profile = SupplierCompany::find($id);

        if(!$profile){

            return redirect()->back()-> with(['error' => 'this profile does not exist']);
        }

        return view('supplier.profile.edit',compact('profile'));


    }



    public function update(ProfileRequest $request , $id){

        try{
            $profile = SupplierCompany::find($id);

            if(!$profile){

                return redirect()->back()-> with(['error' => 'this profile does not exist']);
            }


            DB::beginTransaction();
            $fileName = "";
            if ($request->has('logo')) {
                $profile->logo = $fileName ;
                $fileName = uploadImage('profile', $request->logo);

            }
            $profile -> update($request->except('_token','logo'));
            $profile->save();

            DB::commit();

            return redirect()->route('supplier.profile.profile')->with(['success' => 'update with success']);

        }catch(Exception $ex){

        }

    }


}
