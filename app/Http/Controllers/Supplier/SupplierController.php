<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupplierController extends Controller
{


    public function supplier(){
        return view('supplier.supplier.dashboard');
    }
}
