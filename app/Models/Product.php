<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use Translatable;
    use SoftDeletes;



    protected $with = ['translations'];


    protected $fillable = [
        'company_id',
        'slug',
        'sku',
        'price',
        'selling_price',
        'global_price',
        'qty',
        'in_stock',
        'is_active',
        'approved'
    ];

    protected $casts = [

        'in_stock' => 'boolean',
        'is_active' => 'boolean',
        'approved' => 'boolean',
    ];

    protected $translatedAttributes = ['name', 'description', 'title'];


    public function getActive()
    {
        return $this->is_active == 0 ? 'unactive' : 'active';
    }

    public function getApprove()
    {
        return $this->approved == 0 ? 'not approved' : 'approved';
    }

    public function getStock()
    {
        return $this->in_stock == 0 ? 'out of stock' : 'in stock';
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function scopeApproved($query)
    {
        return $query->where('approved', 1);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tags');
    }

    public function options()
    {
        return $this->belongsToMany(Option::class, 'product_options');
    }

    //////
    ///

    public function images()
    {
        return $this->hasMany(Media::class);
    }

    public function hasStock($quantity)
    {
        return $this->qty >= $quantity;
    }

    public function outOfStock()
    {
        return $this->qty === 0;
    }

    public function inStock()
    {
        return $this->qty >= 1;
    }


    public function companies(){
        return $this->belongsTo(SupplierCompany::class,'company_id');
    }

    public function reviews(){
        return $this->hasMany(ProductReview::class,'product_id');
    }


    public function importlist(){
        return $this->belongsToMany(ImportList::class);
    }




    public function complaints(){
        return $this->hasMany(Complaint::class);
    }



}
