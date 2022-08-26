<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Mindscms\Entrust\Traits\EntrustUserWithPermissionsTrait;

class Client extends  Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;



    protected $guarded=[];

    protected $cast =[
        'is_active' => 'boolean',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'started_payment_date' => 'datetime',
        'ended_payment_date' => 'datetime',
    ];






    public function getActive()
    {
        return $this->is_active == 0 ? 'unactive' : 'active';
    }


    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }


    public function  getPhotoAttribute($val){
        return ($val !== null) ? asset('assets/images/clients/' . $val) : "";
    }



    public function plans(){

        return $this->belongsTo(Client::class,'plans_id');
    }


    public function stores()
    {
        return $this -> belongsToMany(Store::class,'client_stores');
    }


    public function importlist(){
        return $this-> belongsTo(ImportList::class);
    }



    public function complaints(){
        return $this->hasMany(Complaint::class);
    }


}
