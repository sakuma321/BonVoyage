@extends('layouts.travel')
@section('title','都市の新規作成')

@section('content')
<div class="container">
  <div class="row">
    <div class=" mx-auto">
      <h1 class="page-header">都市を作成する</h1>
    </div>
  </div>


  <form action="{{ action('CitiesController@create',['country_id' => $country_id]) }}" method="POST" enctype="multipart/form-data" class="w-75 mx-auto">
    {{ csrf_field() }}



    <div class="form-group">

        <label class="col-md-2">都市名</label>
  
        <input type="text" class="form-control" name="name" placeholder="都市名">
      
    </div>

    <div class="form-group">
      <input type="file" class="form-control-file" name="image" placeholder="画像">
    </div>

    <input type="submit" class="btn btn-primary lg" value="新規作成">

  </form>


</div>



@endsection