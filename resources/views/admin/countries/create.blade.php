@extends('layouts.travel')

@section('title','国の新規作成')

@section('content')
<div class="container">
  <div class="row">
    <div class=" mx-auto">
      <h1 class="page-header">国を投稿する</h1>
    </div>
  </div>


  <form action="{{ action('Admin\CountriesController@create') }}" method="POST" enctype="multipart/form-data" class="w-75 mx-auto">
    {{ csrf_field() }}



    <div class="form-group">

        <label class="col-md-2">国名</label>
  
        <input type="text" class="form-control" name="name" placeholder="国名">
      
    </div>

    <div class="form-group">
      <label>詳細情報</label>
      <textarea class="form-control" name="infomation" placeholder="詳細情報" rows="10"></textarea>
    </div>

    <div class="form-group">
      <label>所要時間</label>
      <input type="datetime-local" class="form-control" name="airplane_times" placeholder="東京からの所要時間">
    </div>

    <div class="form-group">
      <label>気候</label>
      <input type="text" class="form-control" name="climate" placeholder="気候" rows="10">
    </div>

    <div class="form-group">
      <label>通貨</label>
      <input type="text" class="form-control" name="currency" placeholder="通貨">
    </div>

    <div class="form-group">
      <label>ビザ</label>
      <input type="text" class="form-control" name="visa" placeholder="ビザ">
    </div>

    <div class="form-group">
      <input type="file" class="form-control-file" name="image" placeholder="画像">
    </div>

    <input type="submit" class="btn btn-primary lg">新規作成</input>

  </form>


</div>
@endsection