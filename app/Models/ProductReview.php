<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    use HasFactory;


    protected $guarded = [];




    public function client(){
        return $this->belongsTo(Client::class);
    }


    public function product(){
        return $this->belongsTo(Product::class);
    }


    public function getActive()
    {
        return $this->is_active == 0 ? 'unactive' : 'active';
    }
}
