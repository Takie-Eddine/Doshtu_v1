<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\ImportList;
use App\Models\Product;
use App\Models\StoreProduct;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function shop(){


        $products = Product::active()->withAvg('reviews','rating')->approved()->get();
        //return $products;
        $categories = Category::all();

        //return $products;
        return view('client.product.index',compact('products','categories'));
    }

    public function details($slug){

        $data=[];
        $data['product'] = Product::where('slug',$slug) -> first();
        if (!$data['product']){
            return redirect()->route('client.product.index')->with(['error' => 'this product does not exist ']);
        }

        $product_id = $data['product'] -> id ;
        $product_categories_ids =  $data['product'] -> categories ->pluck('id');

        /*$data['product_attributes'] =  Attribute::whereHas('options' , function ($q) use($product_id){
            $q -> whereHas('products',function ($qq) use($product_id){
                $qq -> where('product_id',$product_id);
            });
        })->get();*/

        $data['related_products'] = Product::whereHas('categories',function ($cat) use($product_categories_ids){
            $cat-> whereIn('categories.id',$product_categories_ids);
        }) -> limit(20) -> latest() -> withAvg('reviews','rating') -> get();

        return view('client.product.statistics',$data);
    }





    public function importlist(){

        $products = ImportList::all()->where('client_id',auth('client') -> user() ->id);
        //return $products[2] -> products;

        return view('client.product.importlist',compact('products'));
    }




    public function addimportlist($id){

        try{
            $product = Product::find($id);

            if (!$product) {
                return redirect()->route('client.product.index')->with(['error' => 'this product does not exist ']);
            }

            $product_imported = ImportList::where('product_id',$id)->where('client_id',auth('client') -> user() ->id)->get();

            if(count($product_imported)>0){

                return redirect()->route('client.product.index')->with(['error' => 'this product is already  exist ']);
            }

            $product = ImportList::create([
                'product_id' => $product->id,
                'client_id' => auth('client') -> user() ->id,
            ]);

            return redirect()->route('client.product.index')->with(['success' => 'added successfuly ']);

        }catch(Exception $ex){
            return redirect()->route('client.product.index')->with(['error' => 'there is a problem']);
        }

    }


    public function destroy($id){

        $product = ImportList::where('product_id',$id)->where('client_id',auth('client') -> user() ->id)->get();

        if(count($product)<0){
            return redirect()->route('client.product.index')->with(['error' => 'this product does not  exist ']);
        }


        return redirect()->route('client.product.importlist')->with(['success' => 'removed successfuly']);
    }

    public function listproduct(){

        $products = StoreProduct::all()->where('store_id',auth('client')-> user() -> stores);

        return view('client.product.list',compact('products'));
    }


    public function addtostore(){

    }


    public function edit($slug){

        $data=[];
        $data['product'] = Product::where('slug',$slug) -> first();
        if (!$data['product']){

            return redirect()->route('client.product.index')->with(['error' => 'this product does not exist ']);
        }

        $product_id = $data['product'] -> id ;
        $product_categories_ids =  $data['product'] -> categories ->pluck('id');

        $data['product_attributes'] =  Attribute::whereHas('options' , function ($q) use($product_id){
            $q -> whereHas('products',function ($qq) use($product_id){
                $qq -> where('product_id',$product_id);
            });
        })->get();

        $data['related_products'] = Product::whereHas('categories',function ($cat) use($product_categories_ids){
            $cat-> whereIn('categories.id',$product_categories_ids);
        }) -> limit(20) -> latest() -> get();

        return view('client.product.edit',$data);
    }



    public function push(Request $request){

        return $request->description;

    }

    public function editVariant($id){

        $product = Product::find($id);

        $attributes = Attribute::whereHas('options' , function ($q) use($id){
            $q -> whereHas('products',function ($qq) use($id){
                $qq->whereHas('options',function($qqq) use($id){
                    $qqq -> where('product_id',$id);
                });

            });
        })->get();



        if(!$product){
            return redirect()->route('client.product.index')->with(['error' => 'this product does not exist ']);
        }
        return view('client.product.editvariants',compact('product','attributes'));
    }



    public function getcategory($id){
        $categories = Category::all();

        $category = Category::find($id);
        if(!$category){

            return redirect()->route('client.product.index')->with(['error' => 'this category does not exist ']);
        }

        $products = Product::whereHas('categories',function($q) use($id){
            $q->where('id',$id);
        })-> withAvg('reviews','rating')->get();

        return view('client.product.index')->with('products',$products)->with('categories',$categories) ;
    }




    public function getbyrate($id){

        $categories = Category::all();
        $product = Product::withAvg('reviews','rating')->get();

        if($id == 1){

            $products = Product::whereHas('reviews',function($q) use($id){
                $q->where('rating',$id);
            })->withAvg('reviews','rating')->get();
            //return $products;

            return view('client.product.index',compact('categories'))->with('products',$products) ;

        }


        if($id == 2){

            $products = Product::whereHas('reviews',function($q) use($id){
                $q->where('rating',$id);
            })->withAvg('reviews','rating')->get();

            //return $products;
            return view('client.product.index',compact('categories'))->with('products',$products) ;

        }


        if($id == 3){
            $products = Product::whereHas('reviews',function($q) use($id){
                $q->where('rating',$id);
            })->withAvg('reviews','rating')->get();
            //return $products;

            return view('client.product.index',compact('categories'))->with('products',$products) ;
        }


        if($id == 4){
            $products = Product::whereHas('reviews',function($q) use($id){
                $q->where('rating',$id);
            })->withAvg('reviews','rating')->get();
            //return $products;

            return view('client.product.index',compact('categories'))->with('products',$products) ;

        }


        if ($id == 5) {


            $products = Product::whereHas('reviews',function($q) use($id){
                $q->where('rating',$id);
            })->withAvg('reviews','rating')->get();
            //return $products;
            return view('client.product.index',compact('categories'))->with('products',$products) ;

        }


        else{
            return redirect()->route('client.product.index')->with(['error' => 'this rating does not exist ']);
        }

    }




}
