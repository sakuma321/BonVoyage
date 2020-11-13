<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //

    protected $guarded = array('id');
    
    
    public static $rules = array (
        'id' =>'required',
        'name' =>'required',
        'country_id' =>'required',
        'image'=>'required',
    );

    public function country(){
        return $this->belongsTo('App\Country');
    }
}
