<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supplier\CompanyRequest;
use App\Models\Company;
use App\Models\Supplier;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PragmaRX\Countries\Package\Countries;


class CompanyController extends Controller
{
    public function company()
    {
        $countries = new Countries();
        $countriesCollection = collect($countries->all()->pluck('name.common'))->sort();
        $data = Company::find(auth()->user()->company_id);

        if ($data)
            return view('company.company',['data'=>$data,'countries'=>$countriesCollection]);
        else
            return view('company.company',['data'=>new Company(),'countries'=>$countriesCollection]);
    }

    public function create(CompanyRequest $request)
    {


        try{
            $user = auth()->user();
            $company = Company::find($user->company_id);
            if ($company){
                return $this->updateExisting($request,$company->id);
            }else{

                return $this->createNew($request,$user);
            }
            //return response()->json("success", 200);
        }catch (\Exception $e){
            return redirect()->back()->withErrors($request->messages());
        }


    }



    public function createNew(CompanyRequest $request ,  $user){
        DB::beginTransaction();
        try{
            $created_company = Company::create([
                'company_name'=>$request->get('company_name'),
                'company_description'=>$request->get('company_description'),
                'company_address'=>$request->get('company_address'),
                'company_email'=>$request->get('company_email'),
                'company_phone'=>$request->get('company_phone'),
                'company_country'=>$request->get('company_country'),
                'company_state'=>$request->get('company_state'),
                'company_city'=>$request->get('company_city'),
                'company_postalcode'=>$request->get('company_postalcode'),
                'company_facebook'=>" ".$request->get('company_facebook'),
                'company_website'=>" ".$request->get('company_website'),
                'company_twitter'=>" ".$request->get('company_twitter'),
                'company_youtube'=>" ".$request->get('company_youtube'),
                'company_telegram'=>" ".$request->get('company_telegram'),
                'company_whatsapp'=>" ".$request->get('company_whatsapp'),
                'company_linkedin'=>" ".$request->get('company_linkedin'),
                'company_logo'=>" ".$request->get('company_logo'),
                'company_instagram'=>" ".$request->get('company_instagram'),

            ]);
            $user->company_id = $created_company->id ;
            $user->save();
            DB::commit();
            return redirect()->back()->with(['success'=>"success"]);
        }catch (\Exception $exception){
            DB::rollBack();
            return redirect()->back()->with(['error' => 'there is a problem']);
            //return response()->json($exception->getMessage(), 500);
        }




    }
    public function updateExisting(CompanyRequest $request ,  $id){
        DB::beginTransaction();
        try{
           Company::find($id)
                ->update([
                    'company_name'=>$request->get('company_name'),
                    'company_description'=>$request->get('company_description'),
                    'company_address'=>$request->get('company_address'),
                    'company_email'=>$request->get('company_email'),
                    'company_phone'=>$request->get('company_phone'),
                    'company_country'=>$request->get('company_country'),
                    'company_state'=>$request->get('company_state'),
                    'company_city'=>$request->get('company_city'),
                    'company_postalcode'=>$request->get('company_postalcode'),
                    'company_facebook'=>" ".$request->get('company_facebook'),
                    'company_website'=>" ".$request->get('company_website'),
                    'company_twitter'=>" ".$request->get('company_twitter'),
                    'company_youtube'=>" ".$request->get('company_youtube'),
                    'company_telegram'=>" ".$request->get('company_telegram'),
                    'company_whatsapp'=>" ".$request->get('company_whatsapp'),
                    'company_linkedin'=>" ".$request->get('company_linkedin'),
                    'company_logo'=>" ".$request->get('company_logo'),
                    'company_instagram'=>" ".$request->get('company_instagram'),
                ]);
            DB::commit();
            return redirect()->route('company.company')->with(['success'=>"success"]);;
        }catch (\Exception $exception){
            DB::rollBack();
            return redirect()->route('company.company')->with(['error' => 'there is a problem']);;
        }



    }


}
