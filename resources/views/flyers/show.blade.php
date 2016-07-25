@extends('layout')

@section('styles.header')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
@endsection

@section('content')
  <h1>{{ $flyer->street }}</h1>
  <h2>{!! $flyer->price !!}</h2>
  <div class="description">{!! nl2br($flyer->description)!!}</div>

  <form class="dropzone" action="/{{ $flyer->zip }}/{{ $flyer->street }}/photos" method="POST">
      {{ csrf_field() }}
  </form>

@endsection

@section('scripts.footer')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
@endsection
