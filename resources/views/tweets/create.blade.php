@extends('layout')

@section('content')
  <div class="contents row">
    <div class="container">
      {{ Form::open(['url' => '/tweets', 'method' => 'post']) }}
        <h3>投稿する</h3>
        <input placeholder="Image Url" type="text" name="image">
        <textarea placeholder="text" name="text" cols="30" rows="10"></textarea>
        <input type="submit" value="SEND">
      {{ Form::close() }}
    </div>
  </div>
@endsection
