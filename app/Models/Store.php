<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;


    protected $guarded = [];




    public function clients()
    {
        return $this -> belongsToMany(Client::class,'client_stores');
    }


    public function complaints(){
        return $this->hasMany(Complaint::class);
    }
}
