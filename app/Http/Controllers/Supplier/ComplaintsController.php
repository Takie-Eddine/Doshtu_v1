<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supplier\ComplaintadminRequest;
use App\Http\Requests\Supplier\ComplaintRequest;
use App\Models\Admin;
use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintsController extends Controller
{
    public function index(){

        $complaints = Complaint::whereHas('product',function ($product) {
            $product->whereHas('companies',function($company){
                $company->where('company_id',auth()->user()->company_id);
            });
        })->whereNull('company_id')->get();

        return view('supplier.complaints.index',compact('complaints'));

    }

    public function respond($id){

        $complaint = Complaint::find($id);

        if(!$complaint){

            return redirect()->route('supplier.complaint.index')->with(['error' => 'this user does not exist']);

        }

        return view('supplier.complaints.respond',compact('complaint'));
    }


    public function create(ComplaintRequest $request){

        //return $request;

        $complaintresponse = Complaint::create([

            'title'=>$request->title,
            'body' =>$request->body,
            'store_id' =>$request->store_id,
            'product_id' =>$request->product_id,
            'company_id' =>auth()->user()->company_id,
        ]);


        return redirect()->route('supplier.complaint.index')->with(['success' => 'sent with success']);

    }


    public function view($id){

        $complaint = Complaint::find($id);

        if(!$complaint){

            return redirect()->route('supplier.complaint.index')->with(['error' => 'this user does not exist']);

        }

        return view('supplier.complaints.view',compact('complaint'));
    }



    public function newcomplaint(){

        $admin = Admin::first();

        //return $admin;

        return view('supplier.complaints.create',compact('admin'));
    }



    public function send(ComplaintadminRequest $request){

        //return $request;

        $complaintresponse = Complaint::create([

            'title'=>$request->title,
            'body' =>$request->body,
            'company_id' =>auth()->user()->company_id,
            'admin_id'=>$request->admin_id
        ]);


        return redirect()->route('supplier.complaint.index')->with(['success' => 'sent with success']);
    }


}
