<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    use Translatable;


    protected $with = ['translations'];


    protected $translatedAttributes = ['name'];



    protected $fillable = ['attribute_id', 'product_id','price'];


    protected $hidden = ['translations'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_options');
    }

    public function attribute(){
        return $this -> belongsTo(Attribute::class,'attribute_id');
    }
}
