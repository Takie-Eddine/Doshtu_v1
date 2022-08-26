<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $table = 'medias';


    protected $fillable = ['product_id', 'photo', 'created_at', 'updated_at'];




    public function  getPhotoAttribute($val){
        return ($val !== null) ? asset('assets/images/products/' . $val) : "";
    }



    public function productimages()
    {
        return $this->belongsTo(Product::class);
    }
}
