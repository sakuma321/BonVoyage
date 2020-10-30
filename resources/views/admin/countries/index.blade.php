@extends('layouts.travel')
@section('title', '管理者画面')

@section('content')
<div class="container mx-auto">
  <a href="{{ action('Admin\CountriesController@add') }}" role="button" class="btn btn-primary">新規作成</a>
</div>
@endsection