@extends('layouts.travel')

@section('title','国の編集')

@section('content')
<div class="container">
  <div class="row">
    <div class=" mx-auto">
      <h1 class="page-header">国を編集する</h1>
    </div>
  </div>


  <form action="{{ action('Admin\CountriesController@update') }}" method="POST" enctype="multipart/form-data" class="w-75 mx-auto">
    {{ csrf_field() }}



    <div class="form-group">

        <label class="col-md-2">国名</label>
  
        <input type="text" class="form-control" name="name" placeholder="国名" value="{{ $country_form->name }}">
      
    </div>

    <div class="form-group">
      <label>詳細情報</label>
      <textarea class="form-control" name="infomation" placeholder="詳細情報" rows="10">{{ $country_form->infomation }}</textarea>
    </div>

    <div class="form-group">
      <label>所要時間</label>
      <input type="datetime-local" class="form-control" name="airplane_times" placeholder="東京からの所要時間" value="{{ $country_form->airplane_times }}">
    </div>

    <div class="form-group">
      <label>気候</label>
      <input type="text" class="form-control" name="climate" placeholder="気候" rows="10" value="{{ $country_form->climate }}">
    </div>

    <div class="form-group">
      <label>通貨</label>
      <input type="text" class="form-control" name="currency" placeholder="通貨" value="{{ $country_form->currency }}">
    </div>

    <div class="form-group">
      <label>ビザ</label>
      <input type="text" class="form-control" name="visa" placeholder="ビザ" value="{{ $country_form->visa }}">
    </div>

    <div class="form-group">
      
      <input type="file" class="form-control-file" name="image" placeholder="画像">
      <div class="form-text">設定中：{{ $country_form->image }}</div>

      <label class="form-check-label">
      <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
      </label>
    </div>

    <input type="submit" class="btn btn-primary lg" value="更新">

  </form>


</div>
@endsection