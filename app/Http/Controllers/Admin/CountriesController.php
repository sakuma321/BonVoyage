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

           return redirect('/admin/travel');         
       
    
    }

    public function index(Request $request){
        $posts = Country::all();
        return view('admin.countries.index', ['posts' => $posts]);

    }

    public function edit(Request $request){
        $country = Country::findOrFail($request->id);

        return view('admin.countries.edit',['country_form' => $country]);

    }

    public function update(Request $request){
        dd($request);
        $country = Country::find($request->id);
        $country_form = $request->all();
        
        if($request->remove == 'true'){
            $country_form['image']=null;
        }elseif($request->file('image')){
            $path = $request ->file('image')->store('public/image');
            $country_form['image']= basename($path);
        }else{
            $country_form['image'] = $country->image;
        }
        
        unset($country_form['image']);
        unset($country_form['remove']);
        unset($country_form['_token']);
        
        $country->fill($country_form)->save();
        
        return redirect('admin.countries.index');
        
    }
    
    public function delete(Request $request){
        $country = Country::find($request->id);

        $country->delete();
        return redirect('admin.countries.index');
    }

    public function show($id){
        $country = Country::where("id",$id)->first();
        return view('front.introduction',["country" => $country]);
    }
}
