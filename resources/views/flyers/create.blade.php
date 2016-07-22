@extends('layout')
@section('content')
  <h1>Selling your home?</h1>
  <hr>
  <div class="row">
    <form id="flyer_form" method="POST" enctype="multipart/form-data" action="/flyers" class="col-md-6">
      @include('flyers.form')
    </form>
  </div>
@endsection
