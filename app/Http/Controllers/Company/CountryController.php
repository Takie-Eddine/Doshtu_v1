<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PragmaRX\Countries\Package\Countries;

class CountryController extends Controller
{
    public function getStates(Request $request)
    {
        $countries = new Countries();
        return $countries->where('name.common', $request->get('country'))->first()->hydrateStates()->states->pluck('name')->toArray();;
    }


}
