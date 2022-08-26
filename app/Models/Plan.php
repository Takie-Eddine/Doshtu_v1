<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{

    use Translatable;
    use HasFactory;


    protected $guarded = [];

    protected $with = ['translations'];

    protected $translatedAttributes = ['name'];

    protected $hidden = ['translations'];

    public function scopeTypeA($query)
    {
        return $query->where('type', 'Annual');
    }
    public function scopeTypeM($query)
    {
        return $query->where('type', 'Monthely');
    }


    public function clients(){

        return $this->hasMany(Plan::class);

    }

}
