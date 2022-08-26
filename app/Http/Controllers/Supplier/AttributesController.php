<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supplier\AttributesRequest;
use App\Models\Attribute;
use App\Models\AttributeTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttributesController extends Controller
{
    public function index()
    {
        $attributes = Attribute::all();
        return view('supplier.attribute.index', compact('attributes'));
    }

    public function create()
    {
        return view('supplier.attribute.create');
    }


    public function store(AttributesRequest $request)
    {


        DB::beginTransaction();
        $attribute = Attribute::create([]);


        $attribute->name = $request->name;
        $attribute->save();
        DB::commit();
        return redirect()->route('supplier.attribute.index')->with(['success' => 'added with success']);



    }


    public function edit($id)
    {

        $attribute = Attribute::find($id);

        if (!$attribute)
            return redirect()->route('supplier.attribute.index')->with(['error' => 'this attribute does not exist']);

        return view('supplier.attribute.edit', compact('attribute'));

    }


    public function update($id, AttributesRequest $request)
    {
        try {

            $attribute = Attribute::find($id);

            if (!$attribute)
                return redirect()->route('supplier.attribute.index')->with(['error' => 'this attribute does not exist']);


            DB::beginTransaction();


            $attribute->name = $request->name;
            $attribute->save();

            DB::commit();
            return redirect()->route('supplier.attribute.index')->with(['success' => 'updated with success']);

        } catch (\Exception $ex) {

            DB::rollback();
            return redirect()->route('supplier.attribute.index')->with(['error' => 'there is a problem ']);
        }

    }


    public function destroy($id)
    {
        DB::beginTransaction();
        try {

            $attribute = Attribute::find($id);

            if (!$attribute){
                return redirect()->route('supplier.attribute.index')->with(['error' => 'this attribute does not exist']);
            }


            $attibuteTra = AttributeTranslation::where('attribute_id' , '=' , $id);


            $attribute->delete();
            $attibuteTra->delete();

            DB::commit();
            return redirect()->route('supplier.attribute.index')->with(['success' => 'deleted with success']);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('supplier.attribute.index')->with(['error' => 'there is a problem ']);
        }
    }
}
