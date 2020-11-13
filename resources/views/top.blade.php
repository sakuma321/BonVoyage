@extends('layouts.travel')
@section('title', 'Bon Voyage')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    

<form action="{{ action('HomeController@search')}}" method="GET" class="w-75 mx-auto">
  {{ csrf_field() }}
   <div class="search text-center">
      <p>行きたい国を検索してください。</p>
     <input type="search" name="keyword" value="" placeholder="国名を入力">
    <button type="submit" name="submit"><i class="fas fa-search"></i></button>
  </div>
</form> 
@endsection