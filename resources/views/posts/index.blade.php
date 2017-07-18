@extends('layouts.master')

@section('content')
  {{-- @foreach($posts as $post) --}}
  <div class="col-sm-8 blog-main">
    @foreach($posts as $post)
      @include('posts.article')
    @endforeach
  </div>
  {{-- @endforeach --}}
@endsection
