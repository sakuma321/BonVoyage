<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Country;

class CitiesController extends Controller
{
    public function create($country_id){

        return view('admin.cities.create', ['country_id' => $country_id]);
    }

    public function index($country_id){
        $cities = Country::where("id",$country_id)->first()->cities()->get();
        
        return view('admin.cities.index',["cities"=>$cities]);

    }

    public function store($country_id, Request $request){
        $city = new City;

        $city->name = $request->name;
        $city->country_id = $country_id;

        if(isset($request->image)){
            $path = $request->file("image")->store("public/image");
            $city->image = basename("$path");
        }

        $city->save();

        return redirect('/admin/countries/'.$country_id.'/cities'); 

    }
}
