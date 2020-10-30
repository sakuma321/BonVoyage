<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //国紹介ページの投稿バリデーション
    protected $guarded = array('id');
    
    
    public static $rules = array (
        'id' =>'required',
        'name' =>'required',
        'infomation' =>'required',
        'airplane_times' =>'required',
        'climate' =>'required',
        'currency' =>'required',
        'visa' =>'required',
        'image'=>'required',
    );

    public function cities(){
        return $this->hasMany('App\City');
    }
    
}
