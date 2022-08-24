<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $fillable = ['company_name','company_description','company_address','company_email','company_phone','company_country','company_state','company_city','company_postalcode','company_website','company_logo','company_facebook','company_twitter','company_youtube','company_telegram','company_instagram','company_linkedin','company_whatsapp'];
     protected $table='companies';



}
