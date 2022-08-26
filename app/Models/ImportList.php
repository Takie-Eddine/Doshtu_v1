<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportList extends Model
{
    use HasFactory;


    protected $guarded = [];




    public function clients(){
        return $this->belongsTo(Client::class,'product_id');
    }

    public function products(){
        return $this->belongsTo(Product::class,'product_id');
    }

}
