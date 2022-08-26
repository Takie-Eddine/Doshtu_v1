<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierCompany extends Model
{
    use HasFactory;

    protected $table = 'supplier_companies' ;

    protected $guarded = [];
    protected $cast =[

        'is_active' => 'boolean',
    ];



    public function getActive()
    {
        return $this->is_active == 0 ? 'unactive' : 'active';

    }

    public function  getLogoAttribute($val){
        return ($val !== null) ? asset('assets/images/profile/' . $val) : "";
    }


    public function scopeActive($query){
        return $query -> where('is_active',1);
    }


    public function suppliers(){
        return $this->hasMany(Supplier::class,'company_id');
    }

    public function productscomps(){
        return $this->hasMany(Product::class,'company_id');
    }


    public function complaints(){
        return $this->hasMany(Complaint::class);
    }
}
