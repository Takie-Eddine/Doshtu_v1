<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supplier\ProductRequest ;

use App\Models\Attribute as Attribute;
use App\Models\Category;
use App\Models\Media;
use App\Models\Option;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Tag;
use Exception;
use Illuminate\Contracts\Cache\Store;
use Intervention\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $supplier = Supplier::find(auth()->user()->id);

        if ($supplier->company_id == null) {
            $data = auth()->user()->companies()->get();
            return redirect()->route('supplier.profile.profile',compact('data'))->with(['error' => 'Please Complete your information']);;
        }



        $products = Product::all()->where('company_id', auth()->user()->company_id);

        //return $products;
        return view('supplier.product.index', compact('products'));
    }

    public function create()
    {

        $supplier = Supplier::find(auth()->user()->id);

        if ($supplier->company_id == null) {
            $data = auth()->user()->companies()->get();
            return redirect()->route('supplier.profile.profile',compact('data'))->with(['error' => 'Please Complete your information']);
        }

        $data = [];

        $data['categories'] = Category::parent()->select('id', 'slug')->with(['childrens' => function ($q) {
            $q->select('id', 'parent_id', 'slug');
            $q->with(['childrens' => function ($qq) {
                $qq->select('id', 'parent_id', 'slug');
            }]);
        }])->active()->get();


        $data['options'] = Option::all();
        $data['attributes'] = Attribute::all();
        $data['tags'] = Tag::all();
        return view('supplier.product.create', $data);
    }



    public function store(Request $request)
    {
        return json_encode($request->prod[1]['value']);

        try {


            DB::beginTransaction();

            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            if (!$request->has('in_stock'))
                $request->request->add(['in_stock' => 0]);
            else
                $request->request->add(['in_stock' => 1]);

            $var = auth()->user()->company_id;

            $product = Product::create([
                'slug' => $request->slug,
                'company_id' => auth()->user()->company_id,
                'in_stock' => $request->in_stock,
                'is_active' => $request->is_active,
                'price' => $request->price,
                'selling_price' => $request->selling_price,
                'sku' => $request->sku,
                'qty' => $request->qty,
            ]);

            $product->name = $request->name;
            $product->description = $request->description;
            //$product->title = $request->title;
            $product->save();



            $product->categories()->syncWithoutDetaching($request->categories);
            $product->tags()->syncWithoutDetaching($request->tags);
            $product->options()->syncWithoutDetaching($request->options);






            if ($request->photo && count($request->photo) > 0) {



                foreach ($request->photo as $photo) {


                    $file_name = uploadImage('products', $photo);

                    Media::create([

                        'product_id' => $product->id,
                        'photo' => $file_name,
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('supplier.product.index')->with(['success' => 'added with success']);
        } catch (Exception $ex) {
            DB::rollback();
            return redirect()->route('supplier.product.create')->with(['error' => 'there is a problem']);
        }
    }

    public function edit($id){

        $data = [];
        $data['categories'] = Category::active()->get();
        $data['product'] = Product::find($id);
        $data['options'] = Option::all();
        $data['attributes'] = Attribute::all();
        $data['tags'] = Tag::all();


        // return $data['product'] ->options;



        if(!$data['product']){

            return redirect()->route('supplier.product.index')->with(['error' => 'this product does not exist']);
        }


        return view('supplier.product.edit',$data);

    }


    public function update(ProductRequest $request , $id){

        try{


            $product = Product::find($id);

            if(!$product){
                return redirect()->route('supplier.product.index')->with(['error' => 'this product does not exist']);
            }

            DB::beginTransaction();

                if (!$request->has('is_active'))
                    $request->request->add(['is_active' => 0]);
                else
                    $request->request->add(['is_active' => 1]);

                if (!$request->has('in_stock'))
                    $request->request->add(['in_stock' => 0]);
                else
                    $request->request->add(['in_stock' => 1]);


                $product->update($request->all());

                $product->name = $request->name;
                $product->save();



                $product->categories()->sync($request->categories);
                $product->tags()->sync($request->tags);
                $product->options()->sync($request->options);



                if ($request->photo && count($request->photo) > 0) {

                    foreach ($request->photo as $photo) {

                        $file_name = uploadImage('products', $photo);

                        Media::create([

                            'product_id' => $product->id,
                            'photo' => $file_name,
                        ]);
                    }
                }

            DB::commit();

            return redirect()->route('supplier.product.index')->with(['success' => 'update with success']);
        }catch(Exception $ex){
            DB::rollback();
        }
    }


    public function deleteimage($id){

        try{
            $image = Media::find($id);

            if (!$image) {
                return redirect()->route('supplier.product.index')->with(['error' => 'this photo does not exist']);
            }

            $image->delete();

            return redirect()->back()->with(['success' => 'delete with success']);

        }catch(Exception $ex){
            return redirect()->route('supplier.product.index')->with(['error' => 'there is a problem']);
        }

    }


    public function view($id){
        $product = Product::find($id);


        if(!$product){

            return redirect()->route('supplier.product.index')->with(['error' => 'this product does not exist']);
        }
        //return $product -> images;

        return view('supplier.product.view',compact('product'));
    }


    public function delete($id){

        $product = Product::find($id);
        if(!$product){

            return redirect()->route('supplier.product.index')->with(['error' => 'this product does not exist']);
        }


        $product -> delete();

        return redirect()->back()->with(['success' => 'delete with success']);

    }




}
