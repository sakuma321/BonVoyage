<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Country;

class CountriesController extends Controller
{

    public function add(){
        return view('admin.countries.create');


    }

    //投稿フォームページ
    public function create(Request $request){
        // $this->validate($request,Country::rules);

        $country = new Country;
       
        $country->name = $request->name;
        $country->infomation = $request->infomation;
        $country->airplane_times = $request->airplane_times;
        $country->currency = $request->currency;
        $country->visa = $request->visa;
        $country->climate = $request->climate;

        if(isset($request->image)){
            $path = $request->file("image")->store("public/image");
            $country->image = basename("$path");
        }
        

        $country->save();

           return redirect('/admin/countries/create');         
        // return view('front.introduction',["country"=> $country]);
    
    }

    public function index(Request $request){
        $posts = Country::all();
        return view('admin.countries.index', ['posts' => $posts]);

    }

    public function show($id){
        $country = Country::where("id",$id)->first();
        return view('front.introduction',["country" => $country]);
    }
}
