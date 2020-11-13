<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function search(Request $request)
    {
        $keyword = $request->keyword;

        if($keyword !=""){
            $contry = Country::where('name',$keyword)->first();
           
            return redirect("country/" . $contry->id);
        }else{
            return redirect("/");
        }
        

        // return view('top',['keyword' => $keyword, 'posts' => $posts]);
    }
}
