@extends('layout')
@section('content')
  <h1>Selling your home?</h1>
  <hr>
    <form id="flyer_form" method="POST" enctype="multipart/form-data" action="/flyers/store" >
      @include('flyers.form')
    </form>
@endsection
