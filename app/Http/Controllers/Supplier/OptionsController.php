<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supplier\OptionsRequest;
use App\Models\Attribute;
use App\Models\Option;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OptionsController extends Controller
{
    public function index(){

        $data['options'] = Option::all();

        return view('supplier.option.index',$data);
    }



    public function create(){
        $attributes = Attribute::all();
        return view('supplier.option.create',compact('attributes'));
    }



    public function store(OptionsRequest $request){



        try{
            DB::beginTransaction();

            $option = Option::create([
                'attribute_id' => $request->attribute_id,
            ]);

            $option->name = $request->name;
            $option->save();

            DB::commit();

            return redirect()->route('supplier.option.index')->with(['success' => 'added with success']);

        }catch(Exception $ex){
            DB::rollback();

        }


    }



    public function edit($id){



        $option = Option::find($id);
        $attributes = Attribute::all();
        if (!$option)
            return redirect()->route('supplier.option.index')->with(['error' => 'this attribute does not exist']);

        return view('supplier.option.edit', compact('option','attributes'));
    }



    public function update(OptionsRequest $request , $id){

        try {

            $option = Option::find($id);

            if (!$option)
                return redirect()->route('supplier.option.index')->with(['error' => 'this attribute does not exist']);

            $option->update($request->only(['attribute_id']));

            $option->name = $request->name;
            $option->save();

            return redirect()->route('supplier.option.index')->with(['success' => 'added with success']);
        } catch (\Exception $ex) {

            return redirect()->route('supplier.tag.index')->with(['error' => 'there is a problem ']);
        }


    }
}
