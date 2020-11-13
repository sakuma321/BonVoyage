@extends('layouts.travel')
@section('title', '管理者画面')

@section('content')
<div class="container mx-auto">
  <a href="{{ action('Admin\CountriesController@add') }}" role="button" class="btn btn-primary">国の新規作成</a>
</div>
  
<div class="row">
  <div class="col-10 mx-auto">
    
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th width="10%">ID</th>
          <th width="50%">国名</th>
        </tr>
      </thead>
      <tbody> 
        @foreach($posts as $coun)
        <tr>
          <th>{{ $coun->id }}</th>
          <td>{{ $coun->name }}</td>
          <td><a href="{{ action('Admin\CountriesController@edit', ['id' => $coun->id]) }}" class="btn btn-primary btn-sm">編集</a></td>
          <td><a href="{{ action('Admin\CountriesController@delete', ['id' => $coun->id]) }}" class="btn btn-primary btn-sm">削除</a></td>
        </tr>
        @endforeach
      </tbody>
      
</div>
</table>
</div>

@endsection